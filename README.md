# Restaurant Template
Can be used by anyone for their project
### Required
- [PHP Mailer Library](https://github.com/PHPMailer/PHPMailer)
## Information for Beginners
- Web Hosting is required
  - Popular Localhost (for testing): [XAMPP](https://www.apachefriends.org/index.html)
- How to change images:
  - **Option 1:** Replace images in the "images" file with the same name as the original images. 
  - **Option 2:** Replace link inside the img tag
   `<img src="Link to your new image">`
   OR replace the value of the background property in CSS
   ```
   - CSS -
   
   .myImage {
    background: url("Link to your new image") center center no-repeat;
   }
   
   - HTML -
   
   <div class="myImage"></div>
   ```
- How to change email form destination:
  - Edit **mail.php**
  - Anywhere it says "example@example.com", change it to your email
  ```
  $mail->Username   = 'example@example.com';
  ```
  ```
  $mail->setFrom('example@example.com', 'Your Name');
  $mail->addAddress('example@example.com', 'PHP Mailer');
  ```
  - Where it says "Your name" change to your name `$mail->setFrom('example@example.com', 'Your Name');`
  - Where it says "YourPassword" put in your own password. If your password doesn't work you might need to use an app specific password `$mail->Password   = 'YourPassword';`
- Make sure not to use large images to reduce loading speed.
