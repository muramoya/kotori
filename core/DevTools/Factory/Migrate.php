<?php
/**
 * マイグレーションファイル生成クラス
 * Date: 2017/05/28
 * @author takuya
 * @version: 1.0
 */

namespace KTR\DevTools\Factory;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class Migrate extends Command
{
    protected function configure()
    {
        parent::configure();
        $this->setName('make:migrate')
             ->setDescription('Make migration file')
             ->setDefinition([
                new InputArgument('name', InputArgument::REQUIRED),
                new InputOption('create', 'create', InputOption::VALUE_OPTIONAL, 'table name')
             ]);
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $type = strlen($input->getOption('create')) > 0 ? 'create' : 'update';
        $stub = file_get_contents(__DIR__ . '/stubs/migrate_' . $type . '.stub');
        $stub = str_replace('DummyClass',  \camelize($input->getArgument('name')), $stub);
        if ($type = 'create') $stub = str_replace('DummyTable', $input->getOption('create'), $stub);

        $fileName = date('Y_m_d_His') . '_' . $input->getArgument('name') . '.php';
        $path = realpath(__DIR__ . '/../../../database/migrations') . '/' . $fileName;
        file_put_contents($path, $stub);

        $output->writeln('<info>' . $path . ' created successfully.</info>');
    }
}