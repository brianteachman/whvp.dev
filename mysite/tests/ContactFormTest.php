<?php
/**
 * Here's a quick run-through of how the system and the email test were built. 
 * This design pattern makes other "tricky external systems" testable:
 * 
 * 1. The Email::send() method makes uses of a static object, Email::$mailer, 
 *    to do the dirty work of calling mail(). The default mailer is an object 
 *    of type Mailer, which performs a normal send.
 *    
 * 2. Email::set_mailer() can be called to load in a new mailer object.
 * 
 * 3. SapphireTest::setUp() method calls Email::set_mailer(new TestMailer()) 
 *    to replace the default mailer with a TestMailer object. This replacement 
 *    mailer doesn't actually do anything when it is asked to send an email; 
 *    it just records the details of the email in an internal field that can 
 *    be searched with TestMailer::findEmails().
 *    
 * 4. SapphireTest::assertEmailSent() calls TestMailer::findEmails() to see if 
 *    a mail-send was requested by the application.
 *
 * 
 * @link(http://doc.silverstripe.org/framework/en/topics/testing/email-sending, link)
 * @link(http://api.silverstripe.org/3.0/class-SapphireTest.html, link)
 */

class ContactFormTest extends SapphireTest
{
    function testSomething() {

        $e = new Email();
        $e->To = "someone@example.com";
        $e->Subject = "Hi there";
        $e->Body = "I just really wanted to email you and say hi.";
        $e->send();
        
        /**
         * $this->assertEmailSent($to, $from, $subject, $body)
         *
         * The arguments can be in the form of:
         * - A string: match exactly that string
         * - null/false: match anything
         * - A PERL regular expression
         */
        $this->assertEmailSent("someone@example.com", null, "/th.*e$/");
    }
}