<?php

declare(strict_types=1);

/**
 * @author Bartosz Kubicki b.w.kubicki@gmail.com>
 * Github: https://github.com/bartoszkubicki
 */

namespace BKubicki\CustomAppAreaPlayground\Console\Command;

use BKubicki\CustomAppAreaPlayground\Model\Example;
use Magento\Framework\App\State;
use Magento\Framework\Console\Cli;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class LoadConfigInCustomArea
 * @package BKubicki\CustomAppAreaPlayground\Console\Command
 */
class LoadConfigInCustomArea extends Command
{
    /**
     * @const string
     */
    private const COMMAND_NAME = 'load:config:custom';

    /**
     * @const string
     */
    private const COMMAND_DESC = 'Load config in custom area';

    /**
     * @var Example
     */
    private $example;

    /**
     * @var State
     */
    private $state;

    /**
     * LoadConfigInCustomArea constructor.
     *
     * @param Example $example
     * @param State $state
     * @param null $name
     */
    public function __construct(
        Example $example,
        State $state,
        $name = null
    ) {
        parent::__construct($name);
        $this->example = $example;
        $this->state = $state;
    }

    /**
     * @return void
     */
    protected function configure(): void
    {
        $this->setName(self::COMMAND_NAME)
            ->setDescription(self::COMMAND_DESC);
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     *
     * @return int
     * @throws \Exception
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $this->state->setAreaCode('custom_area');
        $output->writeln((string) $this->example->sayHello());

        return Cli::RETURN_SUCCESS;
    }
}
