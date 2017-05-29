<?php
/**
 * マイグレーションコマンド
 * Date: 2017/05/29
 * @author takuya
 * @version: 1.0
 */

namespace KTR\DevTools;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class Migration extends Command
{
    protected function configure()
    {
        parent::configure();
        $this->setName('migrate')
            ->setDescription('Make controller file')
            ->setDefinition([
                new InputArgument('name', InputArgument::REQUIRED),
            ]);
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {

    }

}