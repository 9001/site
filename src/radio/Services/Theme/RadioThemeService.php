<?php namespace Amelia\Radio\Services\Theme;

use Amelia\Radio\Models\Theme;
use Amelia\Radio\Services\Status\StatusService;
use Illuminate\Contracts\Cache\Repository as Cache,
    Illuminate\Contracts\Config\Repository as Config;

class RadioThemeService implements ThemeService {

    /**
     * Config repository instance
     *
     * @var \Illuminate\Contracts\Config\Repository
     */
    protected $config;

    /**
     * Cache repository instance
     *
     * @var \Illuminate\Contracts\Cache\Repository
     */
    protected $cache;

    /**
     * Current status.
     *
     * @var \Amelia\Radio\Services\Status\StatusService
     */
    protected $status;

    /**
     * Inject dependencies.
     *
     * @param \Illuminate\Contracts\Cache\Repository $cache
     */
    public function __construct(Cache $cache, Config $config, StatusService $status) {
        $this->cache = $cache;
        $this->config = $config;
        $this->status = $status;
    }


    /**
     * Get the current theme
     *
     * @return string
     */
    public function getName()
    {
        // TODO: Implement getName() method.
    }

    /**
     * Return a view name scoped to a theme
     *
     * @param string $name
     * @return string
     */
    public function view($name)
    {
        // TODO: Implement view() method.
    }

    /**
     * Get the extra data needed for themed views
     *
     * @return array
     */
    public function extra()
    {
        // TODO: Implement extra() method.
    }
}