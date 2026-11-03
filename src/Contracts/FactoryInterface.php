<?php

declare(strict_types=1);

namespace Tavaan\Engine\HttpClient\Contracts;

/**
 * قرارداد Factory.
 *
 * @see \Tavaan\Engine\HttpClient\Factory
 * @api 1.0
 */
interface FactoryInterface
{
    /**
     * متد get.
     *
     * @return mixed
     */
    public function get(/* ... */): mixed;

    /**
     * متد post.
     *
     * @return mixed
     */
    public function post(/* ... */): mixed;

    /**
     * متد put.
     *
     * @return mixed
     */
    public function put(/* ... */): mixed;

    /**
     * متد patch.
     *
     * @return mixed
     */
    public function patch(/* ... */): mixed;

    /**
     * متد delete.
     *
     * @return mixed
     */
    public function delete(/* ... */): mixed;

    /**
     * متد withHeaders.
     *
     * @return mixed
     */
    public function withHeaders(/* ... */): mixed;

    /**
     * متد withToken.
     *
     * @return mixed
     */
    public function withToken(/* ... */): mixed;

    /**
     * متد asJson.
     *
     * @return mixed
     */
    public function asJson(/* ... */): mixed;

    /**
     * متد asForm.
     *
     * @return mixed
     */
    public function asForm(/* ... */): mixed;

    /**
     * متد timeout.
     *
     * @return mixed
     */
    public function timeout(/* ... */): mixed;

    /**
     * متد retry.
     *
     * @return mixed
     */
    public function retry(/* ... */): mixed;

    /**
     * متد pool.
     *
     * @return mixed
     */
    public function pool(/* ... */): mixed;

    /**
     * متد fake.
     *
     * @return mixed
     */
    public function fake(/* ... */): mixed;

    /**
     * متد assertSent.
     *
     * @return mixed
     */
    public function assertSent(/* ... */): mixed;

    /**
     * متد withQueryParameters.
     *
     * @return mixed
     */
    public function withQueryParameters(/* ... */): mixed;

    /**
     * متد attach.
     *
     * @return mixed
     */
    public function attach(/* ... */): mixed;
}