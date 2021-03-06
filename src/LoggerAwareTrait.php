<?php

namespace EPWT\Traits;

use Psr\Log\LoggerInterface;

/**
 * Trait LoggerAwareTrait
 * @package EPWT\Traits
 * @author Aurimas Niekis <aurimas@niekis.lt>
 */
trait LoggerAwareTrait
{
    /**
     * @var LoggerInterface
     */
    protected $logger;

    /**
     * @return LoggerInterface
     */
    public function getLogger()
    {
        return $this->logger;
    }

    /**
     * @param LoggerInterface $logger
     */
    public function setLogger($logger)
    {
        $this->logger = $logger;
    }

    /**
     * System is unusable.
     *
     * @param string $message
     * @param array $context
     * @return null
     */
    public function emergency($message, array $context = array())
    {
        if ($this->logger) {
            $context = $this->getLoggerContext($context);

            $this->logger->emergency($message, $context);
        }
    }

    /**
     * Action must be taken immediately.
     *
     * Example: Entire website down, database unavailable, etc. This should
     * trigger the SMS alerts and wake you up.
     *
     * @param string $message
     * @param array $context
     * @return null
     */
    public function alert($message, array $context = array())
    {
        if ($this->logger) {
            $context = $this->getLoggerContext($context);

            $this->logger->alert($message, $context);
        }
    }

    /**
     * Critical conditions.
     *
     * Example: Application component unavailable, unexpected exception.
     *
     * @param string $message
     * @param array $context
     * @return null
     */
    public function critical($message, array $context = array())
    {
        if ($this->logger) {
            $context = $this->getLoggerContext($context);

            $this->logger->critical($message, $context);
        }
    }

    /**
     * Runtime errors that do not require immediate action but should typically
     * be logged and monitored.
     *
     * @param string $message
     * @param array $context
     * @return null
     */
    public function error($message, array $context = array())
    {
        if ($this->logger) {
            $context = $this->getLoggerContext($context);

            $this->logger->error($message, $context);
        }
    }

    /**
     * Exceptional occurrences that are not errors.
     *
     * Example: Use of deprecated APIs, poor use of an API, undesirable things
     * that are not necessarily wrong.
     *
     * @param string $message
     * @param array $context
     * @return null
     */
    public function warning($message, array $context = array())
    {
        if ($this->logger) {
            $context = $this->getLoggerContext($context);

            $this->logger->warning($message, $context);
        }
    }

    /**
     * Normal but significant events.
     *
     * @param string $message
     * @param array $context
     * @return null
     */
    public function notice($message, array $context = array())
    {
        if ($this->logger) {
            $context = $this->getLoggerContext($context);

            $this->logger->notice($message, $context);
        }
    }

    /**
     * Interesting events.
     *
     * Example: User logs in, SQL logs.
     *
     * @param string $message
     * @param array $context
     * @return null
     */
    public function info($message, array $context = array())
    {
        if ($this->logger) {
            $context = $this->getLoggerContext($context);

            $this->logger->info($message, $context);
        }
    }

    /**
     * Detailed debug information.
     *
     * @param string $message
     * @param array $context
     * @return null
     */
    public function debug($message, array $context = array())
    {
        if ($this->logger) {
            $context = $this->getLoggerContext($context);

            $this->logger->debug($message, $context);
        }
    }

    /**
     * Logs with an arbitrary level.
     *
     * @param mixed $level
     * @param string $message
     * @param array $context
     * @return null
     */
    public function log($level, $message, array $context = array())
    {
        if ($this->logger) {
            $context = $this->getLoggerContext($context);

            $this->logger->log($level, $message, $context);
        }
    }

    /**
     * @param array $context
     * @return array
     */
    public function getLoggerContext($context)
    {
        return $context;
    }
}
