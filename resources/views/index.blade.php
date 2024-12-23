<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحه خانگی من</title>
    <link rel="stylesheet" href="styles.css"> <!-- لینک به فایل CSS -->
</head>
<body>
    <style>
        /* Reset برخی از استایل‌های پیش‌فرض مرورگر */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* استایل برای بدنه */
body {
    font-family: 'Arial', sans-serif;
    line-height: 1.6;
    background-color: #f4f4f4;
    color: #333;
}

/* استایل برای هدر */
header {
    background: #007bff;
    color: white;
    padding: 20px 0;
    text-align: center;
}

/* استایل برای ناوبری */
nav ul {
    list-style: none;
    padding: 0;
}

nav ul li {
    display: inline;
    margin: 0 15px;
}

nav ul li a {
    color: white;
    text-decoration: none;
}

/* استایل برای بخش‌ها */
section {
    padding: 20px;
    margin: 20px auto;
    max-width: 800px;
    background: white;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

/* استایل برای عناوین بخش‌ها */
h2 {
    color: #007bff;
    margin-bottom: 10px;
}

/* استایل برای فوتر */
footer {
    text-align: center;
    padding: 10px 0;
    background: #007bff;
    color: white;
    position: relative;
    bottom: 0;
    width: 100%;
}

/* استایل برای لینک‌ها */
a {
    color: #007bff;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}
    </style>
    <header>
        <h1>سلام! من عارف جامی هستم</h1>
        <p>خوش آمدید به وب‌سایت شخصی من</p>
        <nav>
            <ul>
                <li><a href="#about">درباره من</a></li>
                <li><a href="#skills">مهارت‌ها</a></li>
                <li><a href="#projects">پروژه‌ها</a></li>
                <li><a href="#contact">تماس با من</a></li>
            </ul>
        </nav>
    </header>

    <section id="about">
        <h2>درباره من</h2>
        <p>با سلام، اینجانب عارف جامی هستم. فعالیت‌های برنامه‌نویسی خود را از سال 1402 آغاز کرده‌ام.</p>
    </section>

    <section id="skills">
        <h2>مهارت‌ها</h2>
        <ul>
              <li>html</li>
              <li>css</li>
              <li>botstrap</li>
              <li>js</li>
              <li>jqoery</li>
              <li>php </li>
              <li>laravel</li>
        </ul>
    </section>

    <section id="projects">
        <h2>پروژه‌ها</h2>
        <ul>
            <li><a href="https://github.com/mrmp98">پروژه  ها</a> - [میتوانید در گیت هاب من تمام پرژه هارا ببینید ]</li>
        </ul>
    </section>

    <section id="contact">
        <h2>ارتباط با من </h2>
        <p>برای ارتباط با من می‌توانید از طریق ایمیل زیر اقدام کنید:</p>
        <p>Email: <a href="mailto:[ایمیل شما]">[ایمیل شما]</a></p>
    </section>

    <footer>
        <p>&copy; 2024 [نام شما]. تمامی حقوق محفوظ است.</p>
    </footer>
</body>
</html>