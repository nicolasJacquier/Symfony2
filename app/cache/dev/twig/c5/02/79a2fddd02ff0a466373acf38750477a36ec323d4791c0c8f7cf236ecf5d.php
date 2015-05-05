<?php

/* AheGsbBundle:Comptable:accueilComptable.html.twig */
class __TwigTemplate_c50279a2fddd02ff0a466373acf38750477a36ec323d4791c0c8f7cf236ecf5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AheGsbBundle::layout.html.twig");

        $this->blocks = array(
            'messages' => array($this, 'block_messages'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AheGsbBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_messages($context, array $blocks = array())
    {
        // line 3
        echo "    <div>
        ";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "warning"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 5
            echo "            ";
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "    </div>
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "    <br>
    <div >
        
            <button><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("gsb_visiteurs_deconnexion");
        echo "\" 
                                                       accesskey=\"\"title=\"Déconnexion\">
                    Se déconnecter
                </a></button>
            <h2> Bienvenue ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "nom"), "method"), "html", null, true);
        echo " 
                ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "prenom"), "method"), "html", null, true);
        echo "
            </h2>
            <hr>
            <h3> Gestion des Fiches de Frais COMPTABLE </h3>
            <table style=\"text-align: center;\">
             
                <thead>

                    
                    <th>
                        Nom
                    </th>
                    <th>
                        Prénom
                    </th>
                    <th>
                        Adresse
                    </th>
                    <th>
                        Code Postal
                    </th>
                    <th>
                        Ville
                    </th>
                    <th>
                        Date Embauche
                    </th>
                    <th>
                        Choix
                    </th>
                </thead>
            <!--<meta http-equiv=Content-Type content=\"text/html; charset=utf-8\" />  -->
            <tbody>
                ";
        // line 51
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeVisiteur"]) ? $context["listeVisiteur"] : $this->getContext($context, "listeVisiteur")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["visiteur"]) {
            // line 52
            echo "                    
                    
                <tr>
                    
                    <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["visiteur"]) ? $context["visiteur"] : $this->getContext($context, "visiteur")), "nom", array(), "array"), "html", null, true);
            echo "</td>
                    <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["visiteur"]) ? $context["visiteur"] : $this->getContext($context, "visiteur")), "prenom", array(), "array"), "html", null, true);
            echo "</td>
                    <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["visiteur"]) ? $context["visiteur"] : $this->getContext($context, "visiteur")), "adresse", array(), "array"), "html", null, true);
            echo "</td>
                    <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["visiteur"]) ? $context["visiteur"] : $this->getContext($context, "visiteur")), "cp", array(), "array"), "html", null, true);
            echo "</td>
                    <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["visiteur"]) ? $context["visiteur"] : $this->getContext($context, "visiteur")), "ville", array(), "array"), "html", null, true);
            echo "</td>
                    <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["visiteur"]) ? $context["visiteur"] : $this->getContext($context, "visiteur")), "dateEmbauche", array(), "array"), "html", null, true);
            echo "</td>
                    
                    <td>
                       <form action=\"";
            // line 64
            echo $this->env->getExtension('routing')->getPath("gsb_comptable_vuFraisVis", array("idVis" => "visiteur.id"));
            echo "\" method=\"POST\">
                            <button type='submit'>Voir</button>
                       </form>
                    </td>
                    
                </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 71
            echo "                    - liste vide -
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['visiteur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "            </tbody>
        </table>
       
    </div>

";
    }

    public function getTemplateName()
    {
        return "AheGsbBundle:Comptable:accueilComptable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 73,  157 => 71,  145 => 64,  139 => 61,  135 => 60,  131 => 59,  127 => 58,  123 => 57,  119 => 56,  113 => 52,  108 => 51,  72 => 18,  68 => 17,  61 => 13,  56 => 10,  53 => 9,  48 => 7,  39 => 5,  35 => 4,  32 => 3,  29 => 2,);
    }
}
