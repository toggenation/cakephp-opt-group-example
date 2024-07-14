<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\OptGroupController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\OptGroupController Test Case
 *
 * @uses \App\Controller\OptGroupController
 */
class OptGroupControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.OptGroup',
    ];
}
