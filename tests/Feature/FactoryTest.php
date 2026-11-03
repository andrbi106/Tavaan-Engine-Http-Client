<?php

declare(strict_types=1);

namespace Tavaan\Engine\HttpClient\Tests\Feature;

use PHPUnit\Framework\TestCase;
use Tavaan\Engine\HttpClient\Factory;
use Tavaan\Engine\HttpClient\FactoryServiceProvider;
use Tavaan\Core\Contracts\Config\RepositoryInterface;

/**
 * تست‌های Feature برای موتور Factory.
 *
 * هر سناریوی T-NN از مستندات باید به یک متد testTNN_* تبدیل شود.
 */
final class FactoryTest extends TestCase
{
    private Factory $engine;

    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->createMock(RepositoryInterface::class);
        $config->method('get')->willReturn(null);
        $this->engine = new Factory($config);
    }

    /**
     * T-01: get/post/put/delete با fake
     */
    public function test_t01_getpostputdelete__fake(): void
    {
        // TODO: پیاده‌سازی سناریوی T-01 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-01 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-02: `Http::fake()` + assertSent
     */
    public function test_t02_httpfake__assert_sent(): void
    {
        // TODO: پیاده‌سازی سناریوی T-02 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-02 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-03: Retry روی timeout
     */
    public function test_t03_retry__timeout(): void
    {
        // TODO: پیاده‌سازی سناریوی T-03 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-03 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-04: Circuit breaker: open پس از ۵ خطا
     */
    public function test_t04_circuit_breaker_open____(): void
    {
        // TODO: پیاده‌سازی سناریوی T-04 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-04 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-05: SSRF: block IP خصوصی
     */
    public function test_t05_ssrf_block_ip_(): void
    {
        // TODO: پیاده‌سازی سناریوی T-05 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-05 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-06: Redirect با SSRF re-check
     */
    public function test_t06_redirect__ssrf_recheck(): void
    {
        // TODO: پیاده‌سازی سناریوی T-06 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-06 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-07: Pool موازی
     */
    public function test_t07_pool_(): void
    {
        // TODO: پیاده‌سازی سناریوی T-07 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-07 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-08: JSON/form/multipart
     */
    public function test_t08_jso_nformmultipart(): void
    {
        // TODO: پیاده‌سازی سناریوی T-08 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-08 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-09: curl نبود → stream fallback
     */
    public function test_t09_curl___stream_fallback(): void
    {
        // TODO: پیاده‌سازی سناریوی T-09 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-09 هنوز پیاده‌سازی نشده است.');
    }

}