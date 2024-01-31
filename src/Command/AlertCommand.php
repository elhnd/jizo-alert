<?php

namespace Sesame\Bundle\JizoAlert\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'jizo:alert-controller',
    description: 'Create an alert API controller'
)]
class AlertCommand extends Command 
{
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $alertControllerContent = $this->getAlertControllerTemplate();

        file_put_contents('./src/Controller/AlertController.php', $alertControllerContent);

        $output->writeln('AlertControleur créé avec succès.');

        return Command::SUCCESS;
    }

    private function getAlertControllerTemplate(): string
    {
        return <<<JIZO
<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sesame\Bundle\JizoAlert\AlertInterface;
use Sesame\Bundle\JizoAlert\Dto\AlertDto;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AlertController extends AbstractController
{

    public function __construct(private AlertInterface \$alert)
    {

    }

    #[Route('/alerts', name: 'alerts')]
    public function getAlerts(): Response
    {
        return \$this->json(\$this->alert->getAlerts(new AlertDto()));
    }

    public function tesAlerts() 
    {
        return \$this->json(\$this->alert->getAllAlerts());
    }
}
JIZO;
    }
}