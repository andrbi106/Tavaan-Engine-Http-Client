# Tavaan Engine — HttpClient

> **کلاینت HTTP** — موتور HttpClient در فریمورک تَوان

## مشخصات

| فیلد | مقدار |
|---|---|
| شناسه | `tavaan.engine.http-client` |
| نام | `HttpClient` |
| عنوان فارسی | کلاینت HTTP |
| نسخه | `0.1.0` |
| namespace | `Tavaan\Engine\HttpClient` |
| نوع | `engine` |
| Facade | `Http` (accessor: `http`) |

## خطاها (Exceptions)

- `Tavaan\Engine\HttpClient\Exceptions\CircuitOpenException`
- `Tavaan\Engine\HttpClient\Exceptions\ConnectionException`
- `Tavaan\Engine\HttpClient\Exceptions\HttpClientException`
- `Tavaan\Engine\HttpClient\Exceptions\RequestException`

## کلاس‌های اصلی

- `src/CircuitBreaker.php`
- `src/Factory.php`
- `src/HttpClient.php`
- `src/HttpClientServiceProvider.php`
- `src/PendingRequest.php`
- `src/Pool.php`
- `src/Request.php`
- `src/Response.php`
- `src/RetryHandler.php`
- `src/Ssrf/InternalSsrfGuard.php`
- `src/Ssrf/SecuritySsrfAdapter.php`
- `src/Ssrf/SsrfCheckerInterface.php`
- `src/Transport/CurlTransport.php`
- `src/Transport/HttpTransportInterface.php`
- `src/Transport/StreamTransport.php`
- `src/Transport/TransportResponse.php`

## Service Providerها

- `Tavaan\Engine\HttpClient\HttpClientServiceProvider`

## وابستگی‌ها

**موتورهای مورد‌نیاز:**

- `config`
- `event`

## پیکربندی

- فایل پیکربندی: `config/http-client.php`
- کلید: `http-client`

## نصب

```bash
git clone https://github.com/andrbi106/Tavaan-Engine-Http-Client.git
```

این موتور بخشی از فریمورک تَوان است و معمولاً به‌صورت مستقیم نصب نمی‌شود،
بلکه توسط [Tavaan-Core](https://github.com/andrbi106/Tavaan-Core) مدیریت می‌شود.

## روابط با سایر مخازن

| مخزن | نقش |
|---|---|
| **`andrbi106/Tavaan-Engine-Http-Client`** (این مخزن) | موتور HttpClient |
| `andrbi106/Tavaan-Engine-Core` | ساختار پایه + درگاه ارتباط موتورها |
| `andrbi106/Tavaan-Core` | اسکلت اپلیکیشن + همهٔ موتورها |
| `Derogaramin/Tavaan-Framework` | فریمورک مادر (monorepo) |

## مجوز

MIT — هم‌راستا با فریمورک مادر تَوان.
