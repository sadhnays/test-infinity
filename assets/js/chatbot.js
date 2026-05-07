/* ==========================================
   AI CHATBOT - OPEROUTER API INTEGRATION
   ========================================== */

// OpenRouter API Configuration
const OPEROUTER_API_KEY = 'YOUR_API_KEY';
const OPEROUTER_API_URL = 'https://openrouter.ai/api/v1/chat/completions';

// Chat state
let chatOpen = false;
let conversationHistory = [
    {
        role: 'assistant',
        content: 'Hello! I\'m Infinity Assistant, powered by AI. How can I help you today? I can answer questions about our services, pricing, or help you get started with your project.'
    }
];

// Initialize chatbot on page load
document.addEventListener('DOMContentLoaded', function() {
    console.log('Chatbot: DOMContentLoaded fired');
    // Inject widget if not already present
    if (!document.getElementById('chatbot-widget')) {
        console.log('Chatbot: Widget not found, injecting...');
        injectChatWidget();
    } else {
        console.log('Chatbot: Widget already exists in HTML');
    }
    initializeChatEvents();

    // Show badge after 3 seconds
    setTimeout(() => {
        const badge = document.getElementById('chat-badge');
        if (badge && !chatOpen) {
            badge.style.display = 'flex';
        }
    }, 3000);
});

// Inject chatbot HTML into the page
function injectChatWidget() {
    console.log('Chatbot: injectChatWidget() called');
    const widgetHTML = `
    <div id="chatbot-widget" class="chatbot-widget">
        <div id="chatbot-toggle" class="chatbot-toggle" onclick="toggleChat()">
            <i class="fa fa-comment-dots" id="chat-icon"></i>
            <i class="fa fa-times" id="close-icon" style="display:none;"></i>
            <span class="chatbot-badge" id="chat-badge">1</span>
        </div>
        <div id="chatbot-window" class="chatbot-window" style="display:none;">
            <div class="chatbot-header">
                <div class="chatbot-header-info">
                    <div class="chatbot-avatar">
                        <i class="fa fa-robot"></i>
                    </div>
                    <div>
                        <h4>Infinity Assistant</h4>
                        <span class="chatbot-status"><i class="fa fa-circle"></i> Online</span>
                    </div>
                </div>
                <button class="chatbot-close" onclick="toggleChat()"><i class="fa fa-times"></i></button>
            </div>
            <div class="chatbot-messages" id="chatbot-messages">
                <div class="chat-message bot-message">
                    <div class="message-content">
                        <p>Hello! I'm Infinity Assistant, powered by AI. How can I help you today? I can answer questions about our services, pricing, or help you get started with your project.</p>
                    </div>
                </div>
            </div>
            <div class="chatbot-input-area">
                <div class="chatbot-quick-actions">
                    <button class="quick-action" onclick="sendQuickMessage('What services do you offer?')">Services</button>
                    <button class="quick-action" onclick="sendQuickMessage('How can I get a quote?')">Get Quote</button>
                    <button class="quick-action" onclick="sendQuickMessage('What is your typical project timeline?')">Timeline</button>
                </div>
                <div class="chatbot-input-wrapper">
                    <input type="text" id="chatbot-input" placeholder="Type your message..." onkeypress="handleChatKeyPress(event)">
                    <button class="chatbot-send" onclick="sendMessage()"><i class="fa fa-paper-plane"></i></button>
                </div>
            </div>
        </div>
    </div>
    `;
    document.body.insertAdjacentHTML('beforeend', widgetHTML);
}

// Initialize event listeners
function initializeChatEvents() {
    // Close chat on Escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && chatOpen) {
            toggleChat();
        }
    });
}

// Toggle chat window
function toggleChat() {
    console.log('Chatbot: toggleChat() called, chatOpen =', chatOpen);
    const chatWindow = document.getElementById('chatbot-window');
    const chatIcon = document.getElementById('chat-icon');
    const closeIcon = document.getElementById('close-icon');
    const badge = document.getElementById('chat-badge');

    console.log('Chatbot: Elements found - chatWindow:', !!chatWindow, 'chatIcon:', !!chatIcon, 'closeIcon:', !!closeIcon);

    if (!chatWindow) {
        console.error('Chatbot: chatWindow element not found!');
        return;
    }

    chatOpen = !chatOpen;
    chatWindow.style.display = chatOpen ? 'flex' : 'none';
    if (chatIcon) chatIcon.style.display = chatOpen ? 'none' : 'block';
    if (closeIcon) closeIcon.style.display = chatOpen ? 'block' : 'none';

    // Hide badge when opened
    if (chatOpen && badge) {
        badge.style.display = 'none';
    }
    console.log('Chatbot: chatOpen is now', chatOpen);
}

// Send message from input
function sendMessage() {
    const input = document.getElementById('chatbot-input');
    if (!input) return;
    const message = input.value.trim();

    if (!message) return;

    input.value = '';
    addMessage(message, 'user');
    conversationHistory.push({ role: 'user', content: message });
    processWithAI(message);
}

// Send quick action message
function sendQuickMessage(message) {
    addMessage(message, 'user');
    conversationHistory.push({ role: 'user', content: message });
    processWithAI(message);
}

// Handle Enter key press
function handleChatKeyPress(event) {
    if (event.key === 'Enter') {
        sendMessage();
    }
}

// Add message to chat UI
function addMessage(text, sender) {
    const messagesContainer = document.getElementById('chatbot-messages');
    if (!messagesContainer) return;

    const messageDiv = document.createElement('div');
    messageDiv.className = `chat-message ${sender}-message`;

    messageDiv.innerHTML = `
        <div class="message-content">
            <p>${escapeHtml(text)}</p>
        </div>
    `;

    messagesContainer.appendChild(messageDiv);
    messagesContainer.scrollTop = messagesContainer.scrollHeight;
}

// Show typing indicator
function showTypingIndicator() {
    const messagesContainer = document.getElementById('chatbot-messages');
    if (!messagesContainer) return;

    const typingDiv = document.createElement('div');
    typingDiv.className = 'chat-message bot-message';
    typingDiv.id = 'typing-indicator';

    typingDiv.innerHTML = `
        <div class="typing-indicator">
            <span></span>
            <span></span>
            <span></span>
        </div>
    `;

    messagesContainer.appendChild(typingDiv);
    messagesContainer.scrollTop = messagesContainer.scrollHeight;
}

// Remove typing indicator
function removeTypingIndicator() {
    const typingIndicator = document.getElementById('typing-indicator');
    if (typingIndicator) {
        typingIndicator.remove();
    }
}

// Process message with OpenRouter AI
async function processWithAI(userMessage) {
    showTypingIndicator();

    try {
        const response = await fetch(OPEROUTER_API_URL, {
            method: 'POST',
            headers: {
                'Authorization': `Bearer ${OPEROUTER_API_KEY}`,
                'Content-Type': 'application/json',
                'HTTP-Referer': 'https://infinitysofthub.com',
                'X-Title': 'Infinity SoftHub Chatbot'
            },
            body: JSON.stringify({
                model: 'openai/gpt-oss-120b:free',
                messages: [
                    {
                        role: 'system',
                        content: `You are Infinity Assistant, an AI assistant for Infinity SoftHub Technologies.

Company Info:
- Name: Infinity SoftHub Technologies
- Website: infinitysofthub.com
- Email: info@infinitysofthub.com
- Phone: +91-120-5146-341
- Address: 5th Floor, HB Twin Tower, Netaji Subhash Place, New Delhi - 110034, India
- Global offices: USA (Wyoming), Netherlands (Amsterdam), India (Delhi, Gurugram)

Services offered:
1. Web Development (custom websites, e-commerce, web apps)
2. Mobile App Development (iOS, Android, cross-platform)
3. AI & ML Integration (chatbots, predictive analytics, automation)
4. Cloud Solutions (AWS, Azure, Google Cloud migration and management)
5. UI/UX Design (user research, prototyping, design systems)
6. Digital Marketing (SEO, social media, content marketing)

Be helpful, professional, and concise. Keep responses under 150 words. If asked about pricing, mention that you'll connect them with a team member for a custom quote. Always be ready to help schedule consultations or collect contact information for follow-up.`
                    },
                    ...conversationHistory.slice(-10)
                ],
                temperature: 0.7,
                max_tokens: 300
            })
        });

        removeTypingIndicator();

        if (!response.ok) {
            throw new Error(`API Error: ${response.status}`);
        }

        const data = await response.json();
        const aiResponse = data.choices[0].message.content;

        addMessage(aiResponse, 'bot');
        conversationHistory.push({ role: 'assistant', content: aiResponse });

    } catch (error) {
        console.error('OpenRouter API Error:', error);
        removeTypingIndicator();

        const fallbacks = [
            "Thanks for your message! Our team will get back to you soon. For immediate assistance, please email us at info@infinitysofthub.com or call +91-120-5146-341.",
            "I'm currently experiencing connectivity issues. Please reach out to us directly at info@infinitysofthub.com and we'll respond within 24 hours.",
            "Thank you for contacting Infinity SoftHub! Our team is here to help. Please email info@infinitysofthub.com for a quick response."
        ];
        const fallback = fallbacks[Math.floor(Math.random() * fallbacks.length)];
        addMessage(fallback, 'bot');
        conversationHistory.push({ role: 'assistant', content: fallback });
    }
}

// Escape HTML to prevent XSS
function escapeHtml(text) {
    const div = document.createElement('div');
    div.textContent = text;
    return div.innerHTML;
}
