/* ==========================================
   AI CHATBOT - OpenRouter API INTEGRATION
   ========================================== */

// Chat state
let chatOpen = false;
let conversationHistory = [
    {
        role: 'assistant',
        content: 'Hello! I\'m Infinity Assistant. How can I help you today? I can answer questions about our services, pricing, or help you get started with your project.'
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
        <button type="button" id="chatbot-toggle" class="chatbot-toggle" onclick="toggleChat()" aria-label="Open chat assistant" aria-expanded="false" aria-controls="chatbot-window">
            <i class="fas fa-comment-dots" id="chat-icon" aria-hidden="true"></i>
            <i class="fas fa-times" id="close-icon" style="display:none;" aria-hidden="true"></i>
            <span class="chatbot-badge" id="chat-badge">1</span>
        </button>
        <div id="chatbot-window" class="chatbot-window" style="display:none;" role="dialog" aria-label="Infinity Assistant">
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
                <button type="button" class="chatbot-close" onclick="toggleChat()" aria-label="Close chat assistant"><i class="fas fa-times" aria-hidden="true"></i></button>
            </div>
            <div class="chatbot-messages" id="chatbot-messages" aria-live="polite">
                <div class="chat-message bot-message">
                    <div class="message-content">
                        <p>Hello! I'm Infinity Assistant. How can I help you today? I can answer questions about our services, pricing, or help you get started with your project.</p>
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
                    <input type="text" id="chatbot-input" placeholder="Type your message..." aria-label="Chat message" onkeypress="handleChatKeyPress(event)">
                    <button type="button" class="chatbot-send" onclick="sendMessage()" aria-label="Send chat message"><i class="fas fa-paper-plane" aria-hidden="true"></i></button>
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
    const toggle = document.getElementById('chatbot-toggle');

    console.log('Chatbot: Elements found - chatWindow:', !!chatWindow, 'chatIcon:', !!chatIcon, 'closeIcon:', !!closeIcon);

    if (!chatWindow) {
        console.error('Chatbot: chatWindow element not found!');
        return;
    }

    chatOpen = !chatOpen;
    chatWindow.style.display = chatOpen ? 'flex' : 'none';
    if (toggle) {
        toggle.setAttribute('aria-expanded', chatOpen ? 'true' : 'false');
        toggle.setAttribute('aria-label', chatOpen ? 'Close chat assistant' : 'Open chat assistant');
    }
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
    processMessage(message);
}

// Send quick action message
function sendQuickMessage(message) {
    addMessage(message, 'user');
    conversationHistory.push({ role: 'user', content: message });
    processMessage(message);
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

// Process messages locally. Any future AI integration must use a protected
// server-side endpoint so provider credentials never reach the browser.
function processMessage(userMessage) {
    showTypingIndicator();

    window.setTimeout(() => {
        removeTypingIndicator();
        const fallbackResponse = getOfflineResponse(userMessage);
        addMessage(fallbackResponse, 'bot');
        conversationHistory.push({ role: 'assistant', content: fallbackResponse });
    }, 600);
}

// Offline response system (when no API key is configured)
function getOfflineResponse(message) {
    const msg = message.toLowerCase();

    if (msg.includes('service') || msg.includes('offer') || msg.includes('what do you')) {
        return "We help with custom LMS development, plugins, SQL and Python coding labs, AI learning assistants, integrations, migrations, performance optimization, and cloud deployment. Tell us what you are building, or email info@infinitysofthub.com.";
    }
    if (msg.includes('quote') || msg.includes('pricing') || msg.includes('cost')) {
        return "For a custom quote, please email us at info@infinitysofthub.com or call +91-129-2985010. We'll respond within 24 hours with a tailored solution for your needs.";
    }
    if (msg.includes('timeline') || msg.includes('time') || msg.includes('long')) {
        return "Project timelines depend on the LMS, integrations, learner volume, and custom functionality required. Send your requirements to info@infinitysofthub.com and we will recommend a practical delivery plan.";
    }
    if (msg.includes('contact') || msg.includes('phone') || msg.includes('email')) {
        return "You can reach us at: Email: info@infinitysofthub.com, Phone: +91-129-2985010, Address: Plot No. 6 & 7, Wazirpur Road, Jeevan Nagar, Sector 87, Neharpar, Faridabad, Haryana - 121014.";
    }
    if (msg.includes('hello') || msg.includes('hi ') || msg.includes('hey')) {
        return "Hello! Welcome to Infinity SoftHub. How can I help you today? You can ask about our services, request a quote, or get our contact information.";
    }

    return "Thank you for your message! For detailed assistance, please contact our team at info@infinitysofthub.com or call +91-129-2985010. We typically respond within 24 hours.";
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
            
            <!-- Honeypot anti-spam field -->
            <div style="display: none; visibility: hidden; opacity: 0; position: absolute; left: -9999px;">
                <input type="text" id="lead-honey" tabindex="-1" autocomplete="off" value="">
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
    const honey = document.getElementById('lead-honey')?.value.trim() || '';
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
            body: JSON.stringify({ name, email, mobile, message, honey })
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

