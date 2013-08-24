<?php
/**
 * SilverStripe Functional Test; using:
 *
 * Director::test($url, $postVars, $sessionObj)
 *
 * - $url: The URL to execute
 * - $postVars: Post variables to pass to the URL
 * - $sessionObj: A Session object representing the current session.
 *
 * Director::test() lets us execute a URL. It bypasses HTTP, relying 
 * instead on the cleanly encapsulated execution model of Controller.
 *
 * It returns an HTTPResponse object, which gives you the response 
 * headers (including redirection), status code, and body.
 *
 * @link(http://doc.silverstripe.org/framework/en/topics/testing/create-functional-test, link)
 */

class SubsiteAdminTest extends SapphireTest {

    static $fixture_file = 'subsites/tests/SubsiteTest.yml';
 
    /**
     * Return a session that has a user logged in as an administrator
     */
    public function adminLoggedInSession() {
        return new Session(array(
            'loggedInAs' => $this->idFromFixture('Member', 'admin')
        ));
    }
 
    /**
     * Test generation of the view
     */
    public function testBasicView() {

        // Open the admin area logged in as admin
        $response1 = Director::test('admin/subsites/', null, $this->adminLoggedInSession());
 
        // Confirm that this URL gets you the entire page, with the edit form loaded
        $response2 = Director::test('admin/subsites/show/1', null, $this->adminLoggedInSession());
        $this->assertTrue(strpos($response2->getBody(), 'id="Root_Configuration"') !== false);
        $this->assertTrue(strpos($response2->getBody(), '<head') !== false);
 
        // Confirm that this URL gets you just the form content, with the edit form loaded
        $response3 = Director::test('admin/subsites/show/1', array('ajax' => 1), $this->adminLoggedInSession());
 
        $this->assertTrue(strpos($response3->getBody(), 'id="Root_Configuration"') !== false);
        $this->assertTrue(strpos($response3->getBody(), '<form') === false);
        $this->assertTrue(strpos($response3->getBody(), '<head') === false);
    }
}