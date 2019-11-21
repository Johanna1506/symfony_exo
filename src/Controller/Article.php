<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class Article extends AbstractController
{
    public static $articles = [
        'article1'=> [
            'titre' => 'Tokyo',
            'content' => 'Tokyo, anciennement Edo (江戸), officiellement la préfecture métropolitaine de Tokyo (東京都), 
                          est de facto la capitale actuelle du Japon. Elle est la plus peuplée des préfectures du Japon, avec plus 
                          de 13 831 421 habitants intra-muros en 2018 et 42 794 714 dans l\'agglomération4, et forme l\'aire urbaine 
                          la plus peuplée au monde. Située sur la côte est de l\'île principale de l\'archipel japonais, Honshū, Tokyo 
                          est l\'une des quarante-sept préfectures du Japon. Principal centre politique de l\'archipel depuis le xviie siècle, 
                          la ville accueille la plupart des institutions du pays : la résidence principale de l\'empereur du Japon, du Premier 
                          ministre, le siège de la Diète (le parlement japonais), du Cabinet, les ministères qui le constituent ainsi que toutes 
                          les ambassades étrangères.',
            'chemin' => '1',
            'id' => '1'
        ],
        'article2'=> [
            'titre' => 'Sydney',
            'content' => 'Sydney est la ville la plus peuplée d\'Australie et du continent océanien, ainsi que la capitale 
                          de l\'État de Nouvelle-Galles du Sud. Elle est située dans le sud-est du pays, sur les rives de la 
                          mer de Tasman. Avec une aire urbaine comprenant, en 2016, une population de 5,25 millions d\'habitants1 
                          sur près de 12 300 km2, Sydney se place devant Melbourne et Brisbane en termes de population. Ses habitants 
                          s\'appellent les Sydneyites ou Sydneysiders en anglais et les Sydnéens en français.',
            'chemin' => '2',
            'id' => '2'
        ],
        'article3'=> [
            'titre' => 'Bordeaux',
            'content' => 'Bordeaux  est une commune du Sud-Ouest de la France. Capitale de la Gaule aquitaine dès le début
                          du iiie siècle, puis du duché d\'Aquitaine et enfin de l\'ancienne province de Guyenne sous 
                          l\'Ancien régime, elle est aujourd\'hui le chef-lieu de la région Nouvelle Aquitaine, 
                          préfecture du département de la Gironde et le siège de Bordeaux Métropole.',
            'chemin' => '3',
            'id' => '3'
        ],
        'article4'=> [
            'titre' => 'Hobart',
            'content' => 'Hobart est le centre et la ville la plus peuplée de l’État de Tasmanie, en Australie. En 2014 
                          elle comptait 200 000 habitants1. Fondée en 1804 en tant que colonie pénitentiaire, elle est la 
                          deuxième plus ancienne capitale d\'état australien après Sydney.',
            'chemin' => '4',
            'id' => '4'
        ],
        'article5'=> [
            'titre' => 'Queenstown',
            'content' => 'Queenstown est une ville néo-zélandaise de la région Otago au sud-ouest sur l\'Île du Sud. 
                          La ville est construite autour d\'une anse sur le lac Wakatipu, un long lac mince formé comme 
                          un boulon et a de spectaculaires vues sur les montagnes voisines.',
            'chemin' => '5',
            'id' => '5'
        ],
        'article6'=> [
            'titre' => 'Vanuatu',
            'content' => 'Le Vanuatu, en forme longue la république de Vanuatu (en bichelamar Ripablik blong Vanuatu, en 
                          anglais Republic of Vanuatu), est un État situé en mer de Corail et faisant partie de la Mélanésie. 
                          L\'archipel est composé de 83 îles pour la plupart d\'origine volcanique, à 539 kilomètres au 
                          nord-nord-est de la Nouvelle-Calédonie.',
            'chemin' => '6',
            'id' => '6'
        ],

    ];
    /**
     * @Route("/article", name="article")
     */
    public function articleShow(){

        return $this->render('article.html.twig', [
            'articles' => Article::$articles,
            'id'=> Article::$articles
            ]);
    }
    /**
     * @Route("/article/{id}", name="article")
     */
    public function articleOneShow(int $id)
    {
        // Si jamais on te mets un ID de merde, tu prends l'index 0, comme ça pas d'erreurs
        if ($id < 0 || $id >= Count(Article::$articles))
            return $this->render('article.html.twig', [
                'id' => Article::$articles[0]
            ]);
        return $this->render('article.html.twig', [
            'id' => Article::$articles[$id]
        ]);
    }

}

