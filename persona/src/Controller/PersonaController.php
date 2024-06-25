<?php

namespace App\Controller;

use App\Repository\PersonaRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Asset\UrlPackage;
use Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Attribute\Route;

class PersonaController extends AbstractController
{
    #[Route('/persona/random', name: 'get_random_persona', methods: ['GET'])]
    public function randomPersona(Request $request, PersonaRepository $personaRepository): JsonResponse
    {
        $persona = $personaRepository->findRandom();

        if (!$persona) {
            throw new NotFoundHttpException('No persona found');
        }

        $package = new UrlPackage(
            $request->getSchemeAndHttpHost() . '/static/images',
            new EmptyVersionStrategy(),
        );

        return new JsonResponse([
            'id' => $persona->getId(),
            'name' => $persona->getName(),
            'description' => $persona->getDescription(),
            'image' => $package->getUrl($persona->getImage()),
        ]);
    }
}
