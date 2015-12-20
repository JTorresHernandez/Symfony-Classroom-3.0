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

namespace tests\AppBundle\Controller\Admin;


use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TagControllerTest extends WebTestCase
{
    public function testShowUnusedTags()
    {
        $client = static::createClient([], [
            'PHP_AUTH_USER' => 'admin',
            'PHP_AUTH_PW'   => '1234',
        ]);

        $crawler = $client->request('GET', '/admin/tags/unused');

        $tag1 = $crawler->filter('.tag-name')->eq(0)->text();
        $tag2 = $crawler->filter('.tag-name')->eq(1)->text();

        $this->assertEquals('test1', $tag1);
        $this->assertEquals('test2', $tag2);
    }

    public function testRemoveTag()
    {
        $client = static::createClient([], [
            'PHP_AUTH_USER' => 'admin',
            'PHP_AUTH_PW'   => '1234',
        ]);

        $crawler = $client->request('GET', '/admin/tags/unused');

        $removeTag1Link = $crawler->selectLink('remove')->eq(0)->link();

        $client->click($removeTag1Link);
        $crawler = $client->followRedirect();

        $removeTag2Link = $crawler->selectLink('remove')->eq(0)->link();

        $client->click($removeTag2Link);
        $crawler = $client->followRedirect();

        $msg = $crawler->filter('#no-unused-tags-found')->text();

        $this->assertEquals('No unused tags were found', $msg);
    }

    public function testRemoveAllUnusedTags()
    {
        $client = static::createClient([], [
            'PHP_AUTH_USER' => 'admin',
            'PHP_AUTH_PW'   => '1234',
        ]);

        $client->request('GET', '/admin/tags/remove-all-unused-tags');
        $crawler = $client->followRedirect();

        $msg = $crawler->filter('#no-unused-tags-found')->text();

        $this->assertEquals('No unused tags were found', $msg);
    }
}