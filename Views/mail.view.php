<style>
    .email-section {
        max-width: 480px;
        padding: 24px;
        margin: 0 auto;
        background-color: white;
    }

    .email-header {
        display: flex;
        align-items: center;
        margin-top: 24px;
        gap: 16px;
    }

    
    .email-nav {
        display: flex;
        align-items: center;
        margin-top: 16px;
        gap: 24px;
    }

    .email-nav a {
        font-size: 14px;
        color: #666666;
        transition: color 0.3s;
    }

    .email-nav a:hover {
        color: #0055ff;
    }

    .email-main {
        margin-top: 32px;
    }

    .email-main h2 {
        color: #333333;
    }

    .email-main p {
        margin-top: 8px;
        line-height: 1.6;
        color: #666666;
    }

    .email-main p:last-child {
        margin-top: 16px;
        color: #666666;
    }

    .email-login-btn {
        margin-top: 32px;
        padding: 8px 24px;
        font-size: 14px;
        font-weight: 500;
        text-transform: uppercase;
        color: white;
        background-color: #0055ff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s, transform 0.3s;
    }

    .email-login-btn:hover {
        background-color: #0044cc;
        transform: scale(1.05);
    }

    .email-footer {
        margin-top: 32px;
        color: #999999;
    }

    .email-footer a {
        color: #0055ff;
        text-decoration: none;
    }

    .email-footer a:hover {
        text-decoration: underline;
    }

    .text-japonica-400 {
        color: #98b368;
    }
    .flex{
        display: flex;
        align-items: center;
    }
</style>

<section class="email-section">
    <header class="email-header">
        <a href="/" class="flex items-center text-japonica-400">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 mr-3 hidden md:block">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
            </svg>
            <span class="self-center md:text-2xl text-lg font-semibold whitespace-nowrap ">Chungu Poems</span>
        </a>
    </header>
    <main class="email-main">
        <h2>Hi Olivia,</h2>
        <p>
            We’re glad to have you onboard! You’re already on your way to creating beautiful visual products.
            Whether you’re here for your brand, for a cause, or just for fun — welcome! If there’s anything you need, we’ll be here every step of the way.
        </p>
        <p>
            Thanks, <br>
            Meraki UI team
        </p>
        <button class="email-login-btn">Login</button>
    </main>
    <footer class="email-footer">
        <p>
            This email was sent to <a href="#" target="_blank">contact@merakiui.com</a>.
            If you'd rather not receive this kind of email, you can <a href="#">unsubscribe</a> or <a href="#">manage your email preferences</a>.
        </p>
        <p>&copy; 2023 Meraki UI. All Rights Reserved.</p>
    </footer>
</section>