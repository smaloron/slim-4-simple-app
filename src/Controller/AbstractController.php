<?php
namespace My\App\Controller;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\Twig;

class AbstractController
{

    protected Response $response;
    protected Request $request;

    /**
     * @throws \Twig\Error\SyntaxError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\LoaderError
     */
    public function render(string $template, array $data ): Response{
        $view = Twig::fromRequest($this->request);
        return $view->render($this->response, $template, $data);
    }

}