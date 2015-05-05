<?php

/* AheGsbBundle:Comptable:accueilComptables.html.twig */
class __TwigTemplate_b9c8f2c8756b9363fd7b745efba7d6c74ec68dafd61aa8098f90e5c618fb51a0 extends Twig_Template
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
            <tbody>
                ";
        // line 47
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeVisiteur"]) ? $context["listeVisiteur"] : $this->getContext($context, "listeVisiteur")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["visiteur"]) {
            // line 48
            echo "                <tr>
                    <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["visiteur"]) ? $context["visiteur"] : $this->getContext($context, "visiteur")), "nom", array(), "array"), "html", null, true);
            echo "</td>
                    <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["visiteur"]) ? $context["visiteur"] : $this->getContext($context, "visiteur")), "prenom", array(), "array"), "html", null, true);
            echo "</td>
                    <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["visiteur"]) ? $context["visiteur"] : $this->getContext($context, "visiteur")), "adresse", array(), "array"), "html", null, true);
            echo "</td>
                    <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["visiteur"]) ? $context["visiteur"] : $this->getContext($context, "visiteur")), "cp", array(), "array"), "html", null, true);
            echo "</td>
                    <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["visiteur"]) ? $context["visiteur"] : $this->getContext($context, "visiteur")), "ville", array(), "array"), "html", null, true);
            echo "</td>
                    <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["visiteur"]) ? $context["visiteur"] : $this->getContext($context, "visiteur")), "dateEmbauche", array(), "array"), "html", null, true);
            echo "</td>
                    
                    <td>
                        <form action='";
            // line 57
            echo $this->env->getExtension('routing')->getPath("gsb_comptable_vuFraisVis");
            echo "'>
                            <input type='hidden' values='";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["visiteur"]) ? $context["visiteur"] : $this->getContext($context, "visiteur")), "id", array(), "array"), "html", null, true);
            echo "'/>
                            <button type='submit'>Voir</button>
                        </form>
                    </td>
                    
                </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 65
            echo "                    - liste vide -
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['visiteur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "            </tbody>
        </table>
       
    </div>

";
    }

    public function getTemplateName()
    {
        return "AheGsbBundle:Comptable:accueilComptables.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 67,  154 => 65,  142 => 58,  138 => 57,  132 => 54,  128 => 53,  124 => 52,  120 => 51,  116 => 50,  112 => 49,  109 => 48,  104 => 47,  72 => 18,  68 => 17,  61 => 13,  56 => 10,  53 => 9,  48 => 7,  39 => 5,  35 => 4,  32 => 3,  29 => 2,);
    }
}
