<?php
/**
 * (c) Ismael Trascastro <i.trascastro@gmail.com>
 *
 * @link        http://www.ismaeltrascastro.com
 * @copyright   Copyright (c) Ismael Trascastro. (http://www.ismaeltrascastro.com)
 * @license     MIT License - http://en.wikipedia.org/wiki/MIT_License
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace tests\AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CommentControllerTest extends WebTestCase
{
    public function testSubmitComment()
    {
        $client = static::createClient(array(), array(
            'PHP_AUTH_USER' => 'ismael',
            'PHP_AUTH_PW'   => '1234',
        ));

        $crawler = $client->request('GET', '/created-from-test-edited.html');

        $button = $crawler->selectButton('comment[submit]');
        $form = $button->form();

        $form['comment[comment]'] = 'TEST_COMMENT';
        $client->submit($form);
        $client->followRedirect();

        $response = $client->getResponse();

        $this->assertContains('TEST_COMMENT', $response->getContent());
    }

    public function testEdit()
    {
        $client = static::createClient(array(), array(
            'PHP_AUTH_USER' => 'ismael',
            'PHP_AUTH_PW'   => '1234',
        ));

        $crawler = $client->request('GET', '/created-from-test-edited.html');

        $link = $crawler->selectLink('edit comment')->eq(0)->link();

        $crawler = $client->click($link);

        $button = $crawler->selectButton('comment[submit]');
        $form = $button->form();

        $form['comment[comment]'] = 'TEST_COMMENT_EDITED';
        $client->submit($form);
        $client->followRedirect();

        $response = $client->getResponse();

        $this->assertContains('TEST_COMMENT_EDITED', $response->getContent());
    }
}