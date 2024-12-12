# Portfolio

Welcome to my portfolio repository! This project showcases my skills, experience, and projects as a frontend developer and data analyst.

Visit page here: https://yadicep.github.io/portfolio/

## 🌟 About the Project

This portfolio was created to highlight my work and achievements in web development and data analysis. It includes projects built with modern tools and technologies, demonstrating my ability to deliver high-quality solutions.

## 🚀 Features

- **Responsive Design:** Fully responsive and optimized for various devices.
- **Interactive Form:** Contact form to get in touch with me.
- **Clean Code:** Organized, maintainable, and scalable code structure.
- **Animations:** Smooth scrolling animations using [AOS (Animate On Scroll)](https://michalsnik.github.io/aos/).

## 🔧 Technologies Used

- **HTML5 & CSS3:** For the structure and styling of the website.
- **JavaScript:** To add interactivity and dynamic behavior.
- **Bootstrap:** For a consistent and responsive layout.
- **PHP:** To handle backend functionality like form submissions.
- **GoDaddy SMTP:** For sending emails through the contact form.

## 📂 Project Structure

```
portfolio/
├── index.html        # Main HTML file
├── assets/           # Images, styles, and scripts
│   ├── css/          # Custom CSS files
│   ├── js/           # Custom JavaScript files
│   └── img/          # Image assets
├── forms/
│   └── contact.php   # Backend form handler
└── README.md         # Project documentation (this file)
```

## 📋 Prerequisites

Before running this project, ensure you have the following:

- A web server (e.g., XAMPP, WAMP, or any hosting service) to serve the PHP files.
- A valid SMTP configuration for the contact form (GoDaddy recommended).

## 🚀 Getting Started

1. Clone the repository:

   ```bash
   git clone https://github.com/yadicep/portfolio.git
   ```

2. Open the project in your preferred code editor.

3. If running locally:
   - Place the project in your web server's root directory (e.g., `htdocs` for XAMPP).
   - Start your web server and navigate to `http://localhost/portfolio/`.

4. Configure the SMTP settings in `forms/contact.php`:

   ```php
   $contact->smtp = array(
       'host' => 'smtpout.secureserver.net',
       'username' => 'your-email@example.com',
       'password' => 'your-password',
       'port' => '587'
   );
   ```

5. Test the contact form to ensure emails are sent successfully.

## 🎨 Preview

[Live Demo](#) *(Update with your hosting link when available)*

## 📧 Contact Me

If you have any questions or feedback, feel free to reach out:

- **Email:** contact@ycepstudio.com
- **GitHub:** [yadicep](https://github.com/yadicep)
- **Portfolio Website:** [YCEP Studio](https://ycepstudio.com/)

## 🤝 Contributing

Contributions are welcome! Feel free to fork this repository, make your changes, and submit a pull request.


---

Thank you for visiting my portfolio repository! 🌟
