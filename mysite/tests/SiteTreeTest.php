<?php
/**
 * SilverStripe Unit Testing
 *
 * $this->objFromFixture($className, $identifier) 
 * 
 *     is used to select one of the objects named in your fixture file. 
 * The identifier is specified in the YML file but not saved in the 
 * database anywhere. objFromFixture() looks the DataObject up in 
 * memory rather than using the database. This means that you can use
 * it to test the functions responsible for looking up content 
 * in the database.
 * 
 * @link(http://doc.silverstripe.org/framework/en/topics/testing/create-silverstripe-test, link)
 * @link(http://api.silverstripe.org/3.0/class-SapphireTest.html, link)
 * @link(http://doc.silverstripe.org/framework/en/topics/testing/fixtures, link)
 * @link(http://api.silverstripe.org/3.0/class-FixtureFactory.html, link)
 */

class SiteTreeTest extends SapphireTest {
     
    // Define the fixture file to use for this test class
    static $fixture_file = 'SiteTreeTest.yml';
 
    /** 
     * Test generation of the URLSegment values.
     *  - Turns things into lowercase-hyphen-format
     *  - Generates from Title by default, unless URLSegment is explicitly set
     *  - Resolves duplicates by appending a number
     */
    public function testURLGeneration() {
        $expectedURLs = array(
            'home' => 'home',
            'about' => 'about',
            'projects' => 'projects',
            'focusarea' => 'geographic-focus',
            'services' => 'services',
            'siteimages' => 'site-images',
            'favorites' => 'favorites',
            'contact' => 'contact',
        );
         
        foreach($expectedURLs as $fixture => $urlSegment) {
            $obj = $this->objFromFixture('Page', $fixture);
            $this->assertEquals($urlSegment, $obj->URLSegment);
        }
    }
}