<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generative AI Welcome-<?php $_SESSION['username']?></title>
    <script type="module" src="https://gradio.s3-us-west-2.amazonaws.com/3.39.0/gradio.js"></script>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="display: flex; flex-direction:row; background-color:dark; height:70px; "  >
  <a class="navbar-brand" href="/loginsystem" style="padding-left: 60px;  font-size:1.7rem; text-decoration: none; color:aliceblue; padding-top:30px;"> 
  <?php  echo $_SESSION['username']?> </a>

  <div class="collapse navbar-collapse " id="navbarSupportedContent" style="padding-right: 60px; padding-top:10px; margin-left:55%; font-size:1.2rem;">
    <ul class="navbar-nav" style="  display:flex; font-size:1.2rem; ">
      <li class="nav-item active" style="padding-right:15px; width:65px; list-style:none;">
        <a class="nav-link" href="/loginsystem/welcome.php" style="text-decoration: none; color:aliceblue; "onMouseOver="this.style.color='white'">Home</a>
      </li>
      <li class="nav-item" style="padding-right:15px; width:65px; list-style:none;">
        <a class="nav-link" href="/loginsystem/login.php" style="text-decoration: none; color:aliceblue;">Login</a>
      </li>
      <li class="nav-item" style="padding-right:15px; width:65px; list-style:none;">
        <a class="nav-link" href="/loginsystem/signup.php" style="text-decoration: none; color:aliceblue;">Signup</a>
      </li>
      <li class="nav-item" style="padding-right:15px; width:65px; list-style:none;">
        <a class="nav-link" href="/loginsystem/logout.php" style="text-decoration: none; color:aliceblue;">Logout</a>
      </li>
    </ul>
  </div>
</nav>
    <div class="main-container" id="main">
        <div class="description-container">
            <div class="project-details-container">
                <div class="project-description">
                    <p class="description">Riya can be your All-in-One Assistant, from answering questions to engaging in casual conversations</p>
                </div>
                <div class="project-heading">
                    <h1 class="heading">Generative AI ChatBot</h1>
                </div>
            </div>

            <div class="i-have-learnt-section">
                <p class="i-have-learnt">W've made using:</p>
                <div class="topics-list">
                    <div class="topic-icon">
                        <div class="tooltip" id="googleColab">
                            <!-- openai_svgrepo_com_1 -->
                            <svg width="41" height="24" viewBox="0 0 41 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="zoom-svg">
                                <path d="M7.50478 7.85331L3.53332 3.86494C1.34239 6.06057 0.111938 9.03566 0.111938 12.1374C0.111938 15.2392 1.34239 18.2143 3.53332 20.4099L7.52168 16.4215C6.38527 15.2865 5.74533 13.7471 5.74216 12.1409C5.73899 10.5347 6.37286 8.99286 7.50478 7.85331Z" fill="#E8710A" />
                                <path d="M3.53333 3.86497L7.50479 7.85334C8.06826 7.28921 8.7374 6.84167 9.47395 6.53633C10.2105 6.23099 11 6.07383 11.7974 6.07383C12.5947 6.07383 13.3842 6.23099 14.1208 6.53633C14.8573 6.84167 15.5264 7.28921 16.0899 7.85334L18.9798 2.90168L18.8108 2.76648C16.5567 1.08477 13.7727 0.270336 10.9676 0.47203C8.1625 0.673723 5.52366 1.87807 3.53333 3.86497Z" fill="#F9AB00" />
                                <path d="M18.9967 21.3731L16.0899 16.4384C15.5264 17.0025 14.8573 17.45 14.1208 17.7554C13.3842 18.0607 12.5947 18.2179 11.7974 18.2179C11 18.2179 10.2105 18.0607 9.47395 17.7554C8.7374 17.45 8.06826 17.0025 7.50479 16.4384L3.53333 20.4267C5.51969 22.3959 8.14522 23.5892 10.935 23.7906C13.7247 23.9921 16.4945 23.1885 18.7432 21.5252L18.9291 21.3731" fill="#F9AB00" />
                                <path d="M20.1121 3.86492C17.9211 6.06054 16.6907 9.03563 16.6907 12.1374C16.6907 15.2392 17.9211 18.2142 20.1121 20.4099L24.1004 16.4215C22.962 15.283 22.3224 13.739 22.3224 12.1289C22.3224 10.5189 22.962 8.97484 24.1004 7.83638C25.2389 6.69792 26.783 6.05834 28.393 6.05834C30.003 6.05834 31.5471 6.69792 32.6855 7.83638L36.6908 3.86492C35.603 2.77499 34.3109 1.91029 32.8885 1.3203C31.4661 0.730318 29.9413 0.426636 28.4014 0.426636C26.8615 0.426636 25.3367 0.730318 23.9144 1.3203C22.492 1.91029 21.1999 2.77499 20.1121 3.86492Z" fill="#F9AB00" />
                                <path d="M36.6908 3.86494L32.7193 7.85331C33.8578 8.99177 34.4974 10.5359 34.4974 12.1459C34.4974 13.7559 33.8578 15.3 32.7193 16.4384C31.5809 17.5769 30.0368 18.2165 28.4268 18.2165C26.8168 18.2165 25.2727 17.5769 24.1342 16.4384L20.1121 20.4268C22.3083 22.6253 25.2879 23.8613 28.3955 23.8629C29.9342 23.8636 31.4579 23.5613 32.8798 22.9732C34.3017 22.3851 35.5938 21.5227 36.6824 20.4353C37.7709 19.3478 38.6347 18.0566 39.2242 16.6353C39.8138 15.214 40.1176 13.6905 40.1184 12.1518C40.1192 10.6132 39.8169 9.08937 39.2288 7.6675C38.6407 6.24563 37.7783 4.95352 36.6908 3.86494Z" fill="#E8710A" />
                            </svg>
                            <span class="tooltiptext">Google Colab</span>
                        </div>

                    </div>
                    <div class="topic-icon">
                        <div class="tooltip" id="openAi">

                            <svg width="19" height="18" fill="none" xmlns="http://www.w3.org/2000/svg" class="zoom-svg open-ai-logo">
                                <g clip-path="url(#a)">
                                    <path d="M17.264 7.366a4.488 4.488 0 0 0-.387-3.683 4.534 4.534 0 0 0-4.882-2.175 4.55 4.55 0 0 0-7.707 1.628A4.489 4.489 0 0 0 1.29 5.311a4.535 4.535 0 0 0 .557 5.323 4.485 4.485 0 0 0 .383 3.683 4.538 4.538 0 0 0 4.886 2.175A4.488 4.488 0 0 0 10.498 18a4.542 4.542 0 0 0 4.329-3.154 4.49 4.49 0 0 0 2.998-2.175 4.542 4.542 0 0 0-.56-5.305Zm-6.766 9.456a3.357 3.357 0 0 1-2.158-.78l.107-.061 3.584-2.069a.596.596 0 0 0 .294-.51V8.348l1.515.876a.053.053 0 0 1 .029.04v4.186a3.378 3.378 0 0 1-3.371 3.37Zm-7.246-3.094a3.353 3.353 0 0 1-.4-2.26l.106.063 3.587 2.07a.578.578 0 0 0 .585 0l4.382-2.527v1.749c0 .01-.002.018-.007.026a.06.06 0 0 1-.017.02l-3.63 2.094a3.374 3.374 0 0 1-4.606-1.235Zm-.944-7.806a3.364 3.364 0 0 1 1.774-1.48V8.7a.575.575 0 0 0 .291.507l4.361 2.516-1.515.877a.057.057 0 0 1-.053 0l-3.623-2.09a3.378 3.378 0 0 1-1.235-4.606v.018Zm12.448 2.892L10.38 6.273l1.511-.873a.057.057 0 0 1 .053 0l3.623 2.093a3.37 3.37 0 0 1-.507 6.079V9.314a.593.593 0 0 0-.305-.5Zm1.508-2.268-.107-.064-3.58-2.086a.582.582 0 0 0-.59 0L7.61 6.922V5.173a.05.05 0 0 1 .02-.046l3.624-2.09a3.375 3.375 0 0 1 5.01 3.495v.014ZM6.783 9.647l-1.515-.873a.06.06 0 0 1-.029-.042V4.556a3.374 3.374 0 0 1 5.532-2.59l-.107.06-3.583 2.068a.596.596 0 0 0-.295.511l-.003 5.042Zm.823-1.774 1.951-1.125 1.955 1.125v2.25l-1.948 1.125-1.955-1.125-.003-2.25Z" fill="#0EA982"></path>
                                </g>
                                <defs>
                                    <clipPath id="a">
                                        <path fill="#fff" transform="translate(.553)" d="M0 0h18v18H0z"></path>
                                    </clipPath>
                                </defs>
                            </svg>
                            <span class="tooltiptext">Open AI</span>
                        </div>
                    </div>
                    <div class="topic-icon">
                        <div class="tooltip" id="langChain">
                            <img src="https://res.cloudinary.com/davztmw2w/image/upload/v1690651288/image_301_m0b2pw.png" class="zoom-svg langchain-logo" />
                            <!-- <svg width="19" height="18" fill="none" xmlns="http://www.w3.org/2000/svg" class="zoom-svg">
                                <g clip-path="url(#a)">
                                    <path d="M17.264 7.366a4.488 4.488 0 0 0-.387-3.683 4.534 4.534 0 0 0-4.882-2.175 4.55 4.55 0 0 0-7.707 1.628A4.489 4.489 0 0 0 1.29 5.311a4.535 4.535 0 0 0 .557 5.323 4.485 4.485 0 0 0 .383 3.683 4.538 4.538 0 0 0 4.886 2.175A4.488 4.488 0 0 0 10.498 18a4.542 4.542 0 0 0 4.329-3.154 4.49 4.49 0 0 0 2.998-2.175 4.542 4.542 0 0 0-.56-5.305Zm-6.766 9.456a3.357 3.357 0 0 1-2.158-.78l.107-.061 3.584-2.069a.596.596 0 0 0 .294-.51V8.348l1.515.876a.053.053 0 0 1 .029.04v4.186a3.378 3.378 0 0 1-3.371 3.37Zm-7.246-3.094a3.353 3.353 0 0 1-.4-2.26l.106.063 3.587 2.07a.578.578 0 0 0 .585 0l4.382-2.527v1.749c0 .01-.002.018-.007.026a.06.06 0 0 1-.017.02l-3.63 2.094a3.374 3.374 0 0 1-4.606-1.235Zm-.944-7.806a3.364 3.364 0 0 1 1.774-1.48V8.7a.575.575 0 0 0 .291.507l4.361 2.516-1.515.877a.057.057 0 0 1-.053 0l-3.623-2.09a3.378 3.378 0 0 1-1.235-4.606v.018Zm12.448 2.892L10.38 6.273l1.511-.873a.057.057 0 0 1 .053 0l3.623 2.093a3.37 3.37 0 0 1-.507 6.079V9.314a.593.593 0 0 0-.305-.5Zm1.508-2.268-.107-.064-3.58-2.086a.582.582 0 0 0-.59 0L7.61 6.922V5.173a.05.05 0 0 1 .02-.046l3.624-2.09a3.375 3.375 0 0 1 5.01 3.495v.014ZM6.783 9.647l-1.515-.873a.06.06 0 0 1-.029-.042V4.556a3.374 3.374 0 0 1 5.532-2.59l-.107.06-3.583 2.068a.596.596 0 0 0-.295.511l-.003 5.042Zm.823-1.774 1.951-1.125 1.955 1.125v2.25l-1.948 1.125-1.955-1.125-.003-2.25Z" fill="#0EA982"></path>
                                </g>
                                <defs>
                                    <clipPath id="a">
                                        <path fill="#fff" transform="translate(.553)" d="M0 0h18v18H0z"></path>
                                    </clipPath>
                                </defs>
                            </svg> -->
                            <span class="tooltiptext">LangChain</span>
                        </div>
                    </div>
                    <div class="topic-icon">
                        <div class="tooltip" id="gradio">
                            <img src="https://res.cloudinary.com/davztmw2w/image/upload/v1690650885/image_297_1_jrfh7o.jpg" class="zoom-svg gradio-logo" />
                            <span class="tooltiptext">Gradio</span>
                        </div>
                    </div>
                    <div class="topic-icon">
                        <div class="tooltip" id="playHt">
                            <img src="https://res.cloudinary.com/davztmw2w/image/upload/v1690651855/play-ht_sotxmf.webp" class="zoom-svg playht-logo" />
                            <span class="tooltiptext">PlayHT</span>
                        </div>
                    </div>
                    <div class="topic-icon">
                        <div class="tooltip" id="huggingFace">
                            <img src="https://res.cloudinary.com/davztmw2w/image/upload/v1690651476/image_300_c8gpca.png" class="zoom-svg hugging-face-logo" />
                            <span class="tooltiptext">Hugging Face</span>
                        </div>
                    </div>
                </div>
                <div class="about-section"></div>
            </div>
            <div class="footer-section footer-desktop">
                <div class="footer-info">
                Built with<span class="heart-beat"> ❤️ </span>for APP Project
                </div>
                <div class="divider-container">
                    <div class="divider"></div>
                </div>
                <div class="share-now">
                    <p class="footer-info share-now-text">Share on&nbsp;&nbsp;</p>
                    <div class="icons-container">
                        <div class="social-icon whatsapp">
                            <svg width="25" height="25" xmlns="http://www.w3.org/2000/svg" focusable="false" viewBox="0 0 24 24" color="var(--token-5b5d5d35-d634-4828-be5e-9e6eeb626953, rgb(148, 163, 184)) /* {&quot;name&quot;:&quot;Text normal&quot;} */" style="user-select: none; width: 100%; height: 100%; display: inline-block; fill: var(--token-5b5d5d35-d634-4828-be5e-9e6eeb626953, rgb(148, 163, 184)); flex-shrink: 0;">
                                <path d="M16.75 13.96c.25.13.41.2.46.3.06.11.04.61-.21 1.18-.2.56-1.24 1.1-1.7 1.12-.46.02-.47.36-2.96-.73-2.49-1.09-3.99-3.75-4.11-3.92-.12-.17-.96-1.38-.92-2.61.05-1.22.69-1.8.95-2.04.24-.26.51-.29.68-.26h.47c.15 0 .36-.06.55.45l.69 1.87c.06.13.1.28.01.44l-.27.41-.39.42c-.12.12-.26.25-.12.5.12.26.62 1.09 1.32 1.78.91.88 1.71 1.17 1.95 1.3.24.14.39.12.54-.04l.81-.94c.19-.25.35-.19.58-.11l1.67.88M12 2a10 10 0 0 1 10 10 10 10 0 0 1-10 10c-1.97 0-3.8-.57-5.35-1.55L2 22l1.55-4.65A9.969 9.969 0 0 1 2 12 10 10 0 0 1 12 2m0 2a8 8 0 0 0-8 8c0 1.72.54 3.31 1.46 4.61L4.5 19.5l2.89-.96A7.95 7.95 0 0 0 12 20a8 8 0 0 0 8-8 8 8 0 0 0-8-8z"></path>
                            </svg>
                        </div>
                        <div class="social-icon twitter">
                            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22.7576 6.7644C21.9876 7.1144 21.1576 7.3444 20.2976 7.4544C21.1776 6.9244 21.8576 6.0844 22.1776 5.0744C21.3476 5.5744 20.4276 5.9244 19.4576 6.1244C18.6676 5.2644 17.5576 4.7644 16.2976 4.7644C13.9476 4.7644 12.0276 6.6844 12.0276 9.0544C12.0276 9.3944 12.0676 9.7244 12.1376 10.0344C8.57765 9.8544 5.40765 8.1444 3.29765 5.5544C2.92765 6.1844 2.71765 6.9244 2.71765 7.7044C2.71765 9.1944 3.46765 10.5144 4.62765 11.2644C3.91765 11.2644 3.25765 11.0644 2.67765 10.7644V10.7944C2.67765 12.8744 4.15765 14.6144 6.11765 15.0044C5.48837 15.1766 4.82774 15.2006 4.18765 15.0744C4.45925 15.9269 4.99118 16.6728 5.70866 17.2073C6.42614 17.7419 7.29309 18.0381 8.18765 18.0544C6.67128 19.2548 4.79164 19.9037 2.85765 19.8944C2.51765 19.8944 2.17765 19.8744 1.83765 19.8344C3.73765 21.0544 5.99765 21.7644 8.41765 21.7644C16.2976 21.7644 20.6276 15.2244 20.6276 9.5544C20.6276 9.3644 20.6276 9.1844 20.6176 8.9944C21.4576 8.3944 22.1776 7.6344 22.7576 6.7644Z" fill="#94A3B8" />
                            </svg>

                        </div>
                        <div class="social-icon linkedin">
                            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.2977 3.7644C19.8281 3.7644 20.3368 3.97512 20.7119 4.35019C21.087 4.72526 21.2977 5.23397 21.2977 5.7644V19.7644C21.2977 20.2948 21.087 20.8035 20.7119 21.1786C20.3368 21.5537 19.8281 21.7644 19.2977 21.7644H5.29767C4.76724 21.7644 4.25853 21.5537 3.88345 21.1786C3.50838 20.8035 3.29767 20.2948 3.29767 19.7644V5.7644C3.29767 5.23397 3.50838 4.72526 3.88345 4.35019C4.25853 3.97512 4.76724 3.7644 5.29767 3.7644H19.2977ZM18.7977 19.2644V13.9644C18.7977 13.0998 18.4542 12.2706 17.8428 11.6592C17.2315 11.0479 16.4023 10.7044 15.5377 10.7044C14.6877 10.7044 13.6977 11.2244 13.2177 12.0044V10.8944H10.4277V19.2644H13.2177V14.3344C13.2177 13.5644 13.8377 12.9344 14.6077 12.9344C14.979 12.9344 15.3351 13.0819 15.5976 13.3445C15.8602 13.607 16.0077 13.9631 16.0077 14.3344V19.2644H18.7977ZM7.17767 9.3244C7.62323 9.3244 8.05055 9.14741 8.36561 8.83234C8.68067 8.51728 8.85767 8.08997 8.85767 7.6444C8.85767 6.7144 8.10767 5.9544 7.17767 5.9544C6.72945 5.9544 6.29959 6.13246 5.98266 6.44939C5.66572 6.76633 5.48767 7.19619 5.48767 7.6444C5.48767 8.5744 6.24767 9.3244 7.17767 9.3244ZM8.56767 19.2644V10.8944H5.79767V19.2644H8.56767Z" fill="#94A3B8" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="chat-bot-container">
            <gradio-app src="https://likhith263-mygenaichatbotproject.hf.space"></gradio-app>
            <!-- <iframe class="chat-bot-container-iframe" height="100%" width="100%" frameborder="0" src="https://lavanyaburlagadda-chatbot-openai-playht-old.hf.space/?__theme=dark"></iframe> -->
        </div>
        <div class="footer-section footer-mobile">
            <div class="footer-info">
            Built with<span class="heart-beat"> ❤️ </span>for APP Project
            </div>
            <div class="divider-container">
                <div class="divider"></div>
            </div>
            <div class="share-now">
                <p class="footer-info share-now-text">Share on&nbsp;</p>
                <div class="icons-container">
                    <div class="social-icon whatsapp">
                        <svg width="25" height="25" xmlns="http://www.w3.org/2000/svg" focusable="false" viewBox="0 0 24 24" color="var(--token-5b5d5d35-d634-4828-be5e-9e6eeb626953, rgb(148, 163, 184)) /* {&quot;name&quot;:&quot;Text normal&quot;} */" style="user-select: none; width: 100%; height: 100%; display: inline-block; fill: var(--token-5b5d5d35-d634-4828-be5e-9e6eeb626953, rgb(148, 163, 184)); flex-shrink: 0;">
                            <path d="M16.75 13.96c.25.13.41.2.46.3.06.11.04.61-.21 1.18-.2.56-1.24 1.1-1.7 1.12-.46.02-.47.36-2.96-.73-2.49-1.09-3.99-3.75-4.11-3.92-.12-.17-.96-1.38-.92-2.61.05-1.22.69-1.8.95-2.04.24-.26.51-.29.68-.26h.47c.15 0 .36-.06.55.45l.69 1.87c.06.13.1.28.01.44l-.27.41-.39.42c-.12.12-.26.25-.12.5.12.26.62 1.09 1.32 1.78.91.88 1.71 1.17 1.95 1.3.24.14.39.12.54-.04l.81-.94c.19-.25.35-.19.58-.11l1.67.88M12 2a10 10 0 0 1 10 10 10 10 0 0 1-10 10c-1.97 0-3.8-.57-5.35-1.55L2 22l1.55-4.65A9.969 9.969 0 0 1 2 12 10 10 0 0 1 12 2m0 2a8 8 0 0 0-8 8c0 1.72.54 3.31 1.46 4.61L4.5 19.5l2.89-.96A7.95 7.95 0 0 0 12 20a8 8 0 0 0 8-8 8 8 0 0 0-8-8z"></path>
                        </svg>
                    </div>
                    <div class="social-icon twitter">
                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22.7576 6.7644C21.9876 7.1144 21.1576 7.3444 20.2976 7.4544C21.1776 6.9244 21.8576 6.0844 22.1776 5.0744C21.3476 5.5744 20.4276 5.9244 19.4576 6.1244C18.6676 5.2644 17.5576 4.7644 16.2976 4.7644C13.9476 4.7644 12.0276 6.6844 12.0276 9.0544C12.0276 9.3944 12.0676 9.7244 12.1376 10.0344C8.57765 9.8544 5.40765 8.1444 3.29765 5.5544C2.92765 6.1844 2.71765 6.9244 2.71765 7.7044C2.71765 9.1944 3.46765 10.5144 4.62765 11.2644C3.91765 11.2644 3.25765 11.0644 2.67765 10.7644V10.7944C2.67765 12.8744 4.15765 14.6144 6.11765 15.0044C5.48837 15.1766 4.82774 15.2006 4.18765 15.0744C4.45925 15.9269 4.99118 16.6728 5.70866 17.2073C6.42614 17.7419 7.29309 18.0381 8.18765 18.0544C6.67128 19.2548 4.79164 19.9037 2.85765 19.8944C2.51765 19.8944 2.17765 19.8744 1.83765 19.8344C3.73765 21.0544 5.99765 21.7644 8.41765 21.7644C16.2976 21.7644 20.6276 15.2244 20.6276 9.5544C20.6276 9.3644 20.6276 9.1844 20.6176 8.9944C21.4576 8.3944 22.1776 7.6344 22.7576 6.7644Z" fill="#94A3B8" />
                        </svg>

                    </div>
                    <div class="social-icon linkedin">
                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19.2977 3.7644C19.8281 3.7644 20.3368 3.97512 20.7119 4.35019C21.087 4.72526 21.2977 5.23397 21.2977 5.7644V19.7644C21.2977 20.2948 21.087 20.8035 20.7119 21.1786C20.3368 21.5537 19.8281 21.7644 19.2977 21.7644H5.29767C4.76724 21.7644 4.25853 21.5537 3.88345 21.1786C3.50838 20.8035 3.29767 20.2948 3.29767 19.7644V5.7644C3.29767 5.23397 3.50838 4.72526 3.88345 4.35019C4.25853 3.97512 4.76724 3.7644 5.29767 3.7644H19.2977ZM18.7977 19.2644V13.9644C18.7977 13.0998 18.4542 12.2706 17.8428 11.6592C17.2315 11.0479 16.4023 10.7044 15.5377 10.7044C14.6877 10.7044 13.6977 11.2244 13.2177 12.0044V10.8944H10.4277V19.2644H13.2177V14.3344C13.2177 13.5644 13.8377 12.9344 14.6077 12.9344C14.979 12.9344 15.3351 13.0819 15.5976 13.3445C15.8602 13.607 16.0077 13.9631 16.0077 14.3344V19.2644H18.7977ZM7.17767 9.3244C7.62323 9.3244 8.05055 9.14741 8.36561 8.83234C8.68067 8.51728 8.85767 8.08997 8.85767 7.6444C8.85767 6.7144 8.10767 5.9544 7.17767 5.9544C6.72945 5.9544 6.29959 6.13246 5.98266 6.44939C5.66572 6.76633 5.48767 7.19619 5.48767 7.6444C5.48767 8.5744 6.24767 9.3244 7.17767 9.3244ZM8.56767 19.2644V10.8944H5.79767V19.2644H8.56767Z" fill="#94A3B8" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<script src="script.js"></script>
</body>

</html>