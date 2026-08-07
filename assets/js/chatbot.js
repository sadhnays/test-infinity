/* ==========================================
   AI CHATBOT - OpenRouter API INTEGRATION
   ========================================== */

// OpenRouter API Configuration
const OPENROUTER_API_KEY = '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';
const OPENROUTER_API_URL = 'https://openrouter.ai/api/v1/chat/completions';

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
            <i class="fas fa-comment-dots" id="chat-icon"></i>
            <i class="fas fa-times" id="close-icon" style="display:none;"></i>
            <span class="chatbot-badge" id="chat-badge">1</span>
        </div>
        <div id="chatbot-window" class="chatbot-window" style="display:none;">
            <div class="chatbot-header">
                <div class="chatbot-header-info">
                    <div class="chatbot-avatar">
                        <i class="fas fa-robot"></i>
                    </div>
                    <div>
                        <h4>Infinity Assistant</h4>
                        <span class="chatbot-status"><i class="fas fa-circle"></i> Online</span>
                    </div>
                </div>
                <button class="chatbot-close" onclick="toggleChat()"><i class="fas fa-times"></i></button>
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
                    <button class="chatbot-send" onclick="sendMessage()"><i class="fas fa-paper-plane"></i></button>
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

    // Check if API key is configured
    if (OPENROUTER_API_KEY === 'YOUR_API_KEY') {
        // No API key - use offline fallback responses
        removeTypingIndicator();
        const fallbackResponse = getOfflineResponse(userMessage);
        setTimeout(() => {
            addMessage(fallbackResponse, 'bot');
            conversationHistory.push({ role: 'assistant', content: fallbackResponse });
        }, 1000);
        return;
    }

    try {
        const response = await fetch(OPENROUTER_API_URL, {
            method: 'POST',
            headers: {
                'Authorization': `Bearer ${OPENROUTER_API_KEY}`,
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
- Address: Plot No. 6 & 7, Wazirpur Road, Jeevan Nagar, Sector 87, Neharpar, Faridabad, Haryana - 121014

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

// Offline response system (when no API key is configured)
function getOfflineResponse(message) {
    const msg = message.toLowerCase();

    if (msg.includes('service') || msg.includes('offer') || msg.includes('what do you')) {
        return "We offer: 1) Web Development, 2) Mobile App Development, 3) AI & ML Integration, 4) Cloud Solutions, 5) UI/UX Design, and 6) Digital Marketing. Visit our Services page or contact us at info@infinitysofthub.com!";
    }
    if (msg.includes('quote') || msg.includes('pricing') || msg.includes('cost')) {
        return "For a custom quote, please email us at info@infinitysofthub.com or call +91-120-5146-341. We'll respond within 24 hours with a tailored solution for your needs.";
    }
    if (msg.includes('timeline') || msg.includes('time') || msg.includes('long')) {
        return "Project timelines vary by scope. Simple websites take 2-4 weeks, while complex platforms can take 3-6 months. Contact us at info@infinitysofthub.com for a detailed timeline estimate.";
    }
    if (msg.includes('contact') || msg.includes('phone') || msg.includes('email')) {
        return "You can reach us at: Email: info@infinitysofthub.com, Phone: +91-120-5146-341, Address: Plot No. 6 & 7, Wazirpur Road, Jeevan Nagar, Sector 87, Neharpar, Faridabad, Haryana - 121014.";
    }
    if (msg.includes('hello') || msg.includes('hi ') || msg.includes('hey')) {
        return "Hello! Welcome to Infinity SoftHub. How can I help you today? You can ask about our services, request a quote, or get our contact information.";
    }

    return "Thank you for your message! For detailed assistance, please contact our team at info@infinitysofthub.com or call +91-120-5146-341. We typically respond within 24 hours.";
}

// Escape HTML to prevent XSS
function escapeHtml(text) {
    const div = document.createElement('div');
    div.textContent = text;
    return div.innerHTML;
}

// Show lead form in chatbot
function showLeadForm() {
    const messagesContainer = document.getElementById('chatbot-messages');
    if (!messagesContainer) return;

    // Check if form already exists
    if (document.getElementById('lead-form-container')) return;

    const formDiv = document.createElement('div');
    formDiv.className = 'chat-message bot-message';
    formDiv.id = 'lead-form-container';

    formDiv.innerHTML = `
        <div class="message-content lead-form-content">
            <p style="margin-bottom:1rem;"><strong>Get a Free Consultation!</strong></p>
            <p style="font-size:0.8rem; margin-bottom:1rem;">Please fill in your details and our team will contact you within 24 hours.</p>
            <div class="chatbot-form-group">
                <input type="text" id="lead-name" placeholder="Your Name *" class="chatbot-form-input">
            </div>
            <div class="chatbot-form-group">
                <input type="email" id="lead-email" placeholder="Email Address *" class="chatbot-form-input">
            </div>
            <div class="chatbot-form-group">
                <input type="tel" id="lead-mobile" placeholder="Mobile Number *" class="chatbot-form-input">
            </div>
            <div class="chatbot-form-group">
                <textarea id="lead-message" placeholder="Your Message (Optional)" class="chatbot-form-textarea" rows="3"></textarea>
            </div>
            <button class="chatbot-form-submit" onclick="submitLeadForm()">Submit & Get Free Consultation</button>
            <div id="lead-form-error" class="lead-form-error"></div>
        </div>
    `;

    messagesContainer.appendChild(formDiv);
    messagesContainer.scrollTop = messagesContainer.scrollHeight;
}

// Submit lead form
async function submitLeadForm() {
    const name = document.getElementById('lead-name')?.value.trim();
    const email = document.getElementById('lead-email')?.value.trim();
    const mobile = document.getElementById('lead-mobile')?.value.trim();
    const message = document.getElementById('lead-message')?.value.trim() || '';
    const errorDiv = document.getElementById('lead-form-error');

    // Validate
    if (!name || !email || !mobile) {
        if (errorDiv) {
            errorDiv.textContent = 'Please fill in all required fields.';
            errorDiv.style.display = 'block';
        }
        return;
    }

    if (!email.match(/^[^\s@]+@[^\s@]+\.[^\s@]+$/)) {
        if (errorDiv) {
            errorDiv.textContent = 'Please enter a valid email address.';
            errorDiv.style.display = 'block';
        }
        return;
    }

    // Disable button
    const submitBtn = document.querySelector('.chatbot-form-submit');
    if (submitBtn) {
        submitBtn.disabled = true;
        submitBtn.textContent = 'Submitting...';
    }

    try {
        const response = await fetch('chatbot-lead.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ name, email, mobile, message })
        });

        const result = await response.json();

        const messagesContainer = document.getElementById('chatbot-messages');
        const formContainer = document.getElementById('lead-form-container');

        if (formContainer) {
            formContainer.remove();
        }

        // Show success message
        const successDiv = document.createElement('div');
        successDiv.className = 'chat-message bot-message';
        successDiv.innerHTML = `
            <div class="message-content">
                <p><i class="fas fa-check-circle" style="color:#10B981;"></i> ${result.message || 'Thank you! Our team will contact you within 24 hours.'}</p>
            </div>
        `;
        messagesContainer?.appendChild(successDiv);
        messagesContainer.scrollTop = messagesContainer.scrollHeight;

    } catch (error) {
        console.error('Lead submission error:', error);
        if (errorDiv) {
            errorDiv.textContent = 'Submission failed. Please email us at info@infinitysofthub.com';
            errorDiv.style.display = 'block';
        }
        if (submitBtn) {
            submitBtn.disabled = false;
            submitBtn.textContent = 'Submit & Get Free Consultation';
        }
    }
}

// Trigger lead form when user asks for quote/contact
const originalSendQuickMessage = sendQuickMessage;
sendQuickMessage = function(message) {
    if (message.toLowerCase().includes('quote') || message.toLowerCase().includes('consultation')) {
        addMessage(message, 'user');
        conversationHistory.push({ role: 'user', content: message });
        setTimeout(() => showLeadForm(), 500);
        return;
    }
    originalSendQuickMessage(message);
};

// Also trigger lead form when user asks for contact
const originalProcessWithAI = processWithAI;
processWithAI = function(userMessage) {
    const msg = userMessage.toLowerCase();
    if (msg.includes('contact me') || msg.includes('call me') || msg.includes('get in touch') || msg.includes('speak to someone')) {
        addMessage(userMessage, 'user');
        conversationHistory.push({ role: 'user', content: userMessage });
        setTimeout(() => showLeadForm(), 500);
        return;
    }
    originalProcessWithAI(userMessage);
};

