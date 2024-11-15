export function showToast(message, type = 'error') {
    const colors = {
        error: 'linear-gradient(to right, #ff4444, #ff6666)',
        success: 'linear-gradient(to right, #00b09b, #96c93d)',
        warning: 'linear-gradient(to right, #ff9800, #ffb74d)',
        info: 'linear-gradient(to right, #2196f3, #64b5f6)'
    };

    Toastify({
        text: message,
        duration: 3000,
        close: true,
        gravity: "top",
        position: "center",
        stopOnFocus: true,
        style: {
            background: colors[type],
            borderRadius: "8px",
            padding: "12px 24px",
            boxShadow: "0 3px 6px rgba(0,0,0,0.16)",
            fontSize: "14px",
            fontFamily: "'Roboto', sans-serif",
            minWidth: "300px"
        },
        onClick: function(){} // Callback after click
    }).showToast();
} 