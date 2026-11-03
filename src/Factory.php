<?php

declare(strict_types=1);

namespace Tavaan\Engine\HttpClient;

final class Factory
{
    public function get(/* ... */): mixed
    {
        return $this->call("GET", $uri);
    }
    public function post(/* ... */): mixed
    {
        return $this->call("POST", $uri, $data);
    }
    public function put(/* ... */): mixed
    {
        return $this->call("PUT", $uri, $data);
    }
    public function patch(/* ... */): mixed
    {
        return $this->call("PATCH", $uri, $data);
    }
    public function delete(/* ... */): mixed
    {
        return $this->call("DELETE", $uri, $data);
    }
    public function withHeaders(/* ... */): mixed
    {
        return null;
    }
    public function withToken(/* ... */): mixed
    {
        return null;
    }
    public function asJson(/* ... */): mixed
    {
        return null;
    }
    public function asForm(/* ... */): mixed
    {
        return null;
    }
    public function timeout(/* ... */): mixed
    {
        return null;
    }
    public function retry(/* ... */): mixed
    {
        return null;
    }
    public function pool(/* ... */): mixed
    {
        return null;
    }
    public function fake(/* ... */): mixed
    {
        return null;
    }
    public function assertSent(/* ... */): mixed
    {
        $this->assertTrue(count($this->sent) > 0);
    }
    public function withQueryParameters(/* ... */): mixed
    {
        return null;
    }
    public function attach(/* ... */): mixed
    {
        return $this;
    }
}
