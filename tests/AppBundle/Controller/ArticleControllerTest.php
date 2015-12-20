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

class ArticleControllerTest extends WebTestCase
{
    public function testArticles()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');

        // $this->assertCount(2, $crawler->filter('h1'));
        $this->assertGreaterThan(0, $crawler->filter('h1')->count());
    }

    public function testNew()
    {
        $client = static::createClient(array(), array(
            'PHP_AUTH_USER' => 'ismael',
            'PHP_AUTH_PW'   => '1234',
        ));

        $crawler = $client->request('GET', '/new');

        $button = $crawler->selectButton('article[submit]');

        $form = $button->form();

        $form['article[title]'] = 'Created From Test';
        $form['article[intro]'] = 'Test intro';
        $form['article[content]'] = 'Test content';
        $form['article[tags][1]']->tick();
        $form['article[new_tags]'] = 'test1;test2';

        $client->submit($form);

        $crawler = $client->followRedirect();
        $response = $client->getResponse();

        $intro = $crawler->filter('#article-intro')->text();
        $content = $crawler->filter('#article-content')->text();

        $this->assertEquals('Created From Test', $crawler->filter('h1')->first()->text());
        $this->assertEquals('Test intro', trim($intro));
        $this->assertEquals('Test content', trim($content));
        $this->assertContains('test1', $response->getContent());
        $this->assertContains('test2', $response->getContent());
    }

    public function testShow()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/created-from-test.html');
        $response = $client->getResponse();

        $intro = $crawler->filter('#article-intro')->text();
        $content = $crawler->filter('#article-content')->text();

        $this->assertEquals('Created From Test', $crawler->filter('h1')->first()->text());
        $this->assertEquals('Test intro', trim($intro));
        $this->assertEquals('Test content', trim($content));
        $this->assertContains('test1', $response->getContent());
        $this->assertContains('test2', $response->getContent());
    }

    public function testArticlesByTag()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/articles/tag/test1');
        $this->assertEquals('Created From Test', $crawler->filter('h1')->first()->text());

        $crawler = $client->request('GET', '/articles/tag/test2');
        $this->assertEquals('Created From Test', $crawler->filter('h1')->first()->text());
    }

    public function testArticlesByUser()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/articles/user/ismael');
        $this->assertEquals('Created From Test', $crawler->filter('h1')->first()->text());
    }

    public function testEdit()
    {
        $client = static::createClient(array(), array(
            'PHP_AUTH_USER' => 'ismael',
            'PHP_AUTH_PW'   => '1234',
        ));

        $crawler = $client->request('GET', '/');

        $link = $crawler->selectLink('edit article')->link();

        $crawler = $client->click($link);

        $button = $crawler->selectButton('article[submit]');

        $form = $button->form();

        $form['article[title]'] = 'Created From Test EDITED';

        $client->submit($form);

        $crawler = $client->followRedirect();
        $response = $client->getResponse();

        $intro = $crawler->filter('#article-intro')->text();
        $content = $crawler->filter('#article-content')->text();

        $this->assertEquals('Created From Test EDITED', $crawler->filter('h1')->first()->text());
        $this->assertEquals('Test intro', trim($intro));
        $this->assertEquals('Test content', trim($content));
        $this->assertContains('test1', $response->getContent());
        $this->assertContains('test2', $response->getContent());
    }
}