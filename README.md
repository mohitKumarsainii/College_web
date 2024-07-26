# College Website Project 

https://github.com/user-attachments/assets/14b93545-4b13-47c1-aa2e-cec31c28dc34

## Overview
This project is a comprehensive website for a college, featuring various pages including the home page, about page, courses page, blog page, and contact page. The site utilizes HTML for structure, CSS for styling, JavaScript for interactivity, and PHP for form handling.

## Project Structure
The project includes the following main files:

- `index.html`: The homepage of the website.
- `about.html`: Information about the college.
- `course.html`: Lists courses offered by the college.
- `Blog.html`: Blog page with posts about the college's programs and events.
- `contact.html`: Contact page for user inquiries.
- `form-handler.php`: Script to handle form submissions.
- `style.css`: Stylesheet for the website.
- `school.js`: JavaScript for interactive elements.

## File Descriptions

### HTML Files
- **index.html**: The main landing page, featuring sections such as header, navigation, hero section, and footer.
  
- **about.html**: Details about the college, including history, mission, and vision.
  
- **course.html**: Lists all the courses offered by the college with descriptions and other details.
  
- **Blog.html**: Contains blog posts related to the college's activities, programs, and events. Users can leave comments on posts.
  
- **contact.html**: Includes a form for users to contact the college. Fields include name, email, subject, and message. Form data is submitted to `form-handler.php`.

### PHP File
- **form-handler.php**: Handles form submissions from the contact page and processes the input data.

### CSS File
- **style.css**: The main stylesheet for the website, covering layout, typography, navigation, forms, and responsive design.

### JavaScript File
- **school.js**: Contains functions for interactive elements like showing and hiding the navigation menu.

## Usage
To view the website, open the `index.html` file in a web browser. Navigate to other pages using the links in the navigation bar.

## Customization
- **HTML Content**: Modify the content within the HTML files to update text, images, and links.
- **Styles**: Customize the website's look and feel by editing the `style.css` file.
- **JavaScript**: Add or modify interactive features by editing the `school.js` file.
- **Form Handling**: Update the form handling logic in `form-handler.php` as needed.

## Dependencies
- Google Fonts (Poppins)
- Font Awesome (for icons)

## PHP Form Handling
The `form-handler.php` file processes form submissions from the contact page. Here is an example of how the PHP script processes form data:

```php
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    $to = "info@mohitkummar.com";
    $headers = "From: " . $email;

    if (mail($to, $subject, $message, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
}
?>
```

### Using the PHP Script
1. Ensure your server supports PHP and has mail sending capabilities.
2. Modify the `$to` variable to the desired recipient email address.
3. Upload the `form-handler.php` file to your server.
4. Ensure the `contact.html` form action points to `form-handler.php`.

## Contact
For any questions or support, please contact 8094543894.


