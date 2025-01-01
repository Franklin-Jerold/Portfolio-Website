Portfolio Website
Project Description
This is a personal portfolio website designed to showcase your professional skills, projects, and provide a platform for others to contact you. It is built using modern web technologies, including:

HTML5 and CSS3 for structure and styling.
Bootstrap 5 for responsive design.
JavaScript for interactivity.
PHP for backend email handling with the SendGrid API.
Features
Responsive Design: The website looks great on all devices, from desktops to mobile phones.
Hero Section: Introduces you with a prominent header and tagline.
About Section: Details about your background and expertise.
Projects Section: Highlights key projects with descriptions.
Contact Form: Allows visitors to send you messages via email.
Email Integration: Contact form messages are sent to your email using the SendGrid API.
Prerequisites
XAMPP:

Download and install XAMPP from Apache Friends.
Ensure Apache and MySQL services are running.
SendGrid Account:

Create a free account on SendGrid and generate an API key.
Replace the placeholder E2EF2X189SKXY39QRH5JHRCY in the contact.php file with your actual SendGrid API key.
Setup Instructions
Follow these steps to set up the project:

Download the Project:

Download or clone the project files to your local machine.
Move Files to XAMPP:

Copy the project folder (e.g., PortfolioWebsite) to the htdocs directory in your XAMPP installation (usually located in C:\xampp\htdocs).
Configure SendGrid:

Open the contact.php file in the project folder.
Replace the placeholder API key in the $apiKey variable with your SendGrid API key.
Start XAMPP:

Open the XAMPP control panel.
Start the Apache service.
Access the Website:

Open a web browser and go to http://localhost/Portfolio.