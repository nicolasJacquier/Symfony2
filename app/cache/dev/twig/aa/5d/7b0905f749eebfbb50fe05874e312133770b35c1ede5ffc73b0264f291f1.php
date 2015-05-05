<?php

/* AheGsbBundle:Visiteurs:consultationFrais.html.twig */
class __TwigTemplate_aa5d7b0905f749eebfbb50fe05874e312133770b35c1ede5ffc73b0264f291f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AheGsbBundle::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'bloc1' => array($this, 'block_bloc1'),
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
    public function block_body($context, array $blocks = array())
    {
        // line 3
        $this->displayBlock('bloc1', $context, $blocks);
        // line 30
        echo "

<h3>Consultation de la fiche de frais du mois ";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["numMois"]) ? $context["numMois"] : $this->getContext($context, "numMois")), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["numAnnee"]) ? $context["numAnnee"] : $this->getContext($context, "numAnnee")), "html", null, true);
        echo " : 
</h3>
    <div class=\"forfait\">
        <fieldset><legend> Frais forfaitisés </legend>
            <table border='1' style='background-color: #F5DA81'>
  \t    <tr>
                ";
        // line 38
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesFraisForfait"]) ? $context["lesFraisForfait"] : $this->getContext($context, "lesFraisForfait")));
        foreach ($context['_seq'] as $context["_key"] => $context["unFrais"]) {
            // line 39
            echo "                    ";
            $context["libelle"] = $this->getAttribute((isset($context["unFrais"]) ? $context["unFrais"] : $this->getContext($context, "unFrais")), "libelle");
            // line 40
            echo "                    <th> ";
            echo twig_escape_filter($this->env, (isset($context["libelle"]) ? $context["libelle"] : $this->getContext($context, "libelle")), "html", null, true);
            echo "</th>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unFrais'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "  
            </tr>
            <tr>
                ";
        // line 44
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesFraisForfait"]) ? $context["lesFraisForfait"] : $this->getContext($context, "lesFraisForfait")));
        foreach ($context['_seq'] as $context["_key"] => $context["unFrais"]) {
            // line 45
            echo "                    ";
            $context["quantite"] = $this->getAttribute((isset($context["unFrais"]) ? $context["unFrais"] : $this->getContext($context, "unFrais")), "quantite");
            // line 46
            echo "                    <td >";
            echo twig_escape_filter($this->env, (isset($context["quantite"]) ? $context["quantite"] : $this->getContext($context, "quantite")), "html", null, true);
            echo " </td>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unFrais'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "  
            </tr>
            </table>
        </fieldset>
    </div>
    <br/>
    <div class=\"forfait\">
        
        <fieldset><legend>Frais hors forfait</legend>
                    <table border='1' style='width: 50%;background-color: #F5DA81;text-align: center'>
                        <tr>
                            <th>date </th>
                            <th> Libellé</th>
                            <th>Montant</th>
                        </tr>
                        

                        ";
        // line 64
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fraishf"]) ? $context["fraishf"] : $this->getContext($context, "fraishf")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 65
            echo "                            <tr>
                                <td> ";
            // line 66
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "date", array(), "array"), "d-m-Y"), "html", null, true);
            echo "</td>
                                <td> ";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "libelle", array(), "array"), "html", null, true);
            echo "</td>
                                <td> ";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "montant", array(), "array"), "html", null, true);
            echo "</td>
                                
                                
                                <td><table style='width: 100%;text-align: center; '> 
                                        <tr>
                                            <td>
                                                <a href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gsb_visiteurs_modfhf", array("id" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id", array(), "array"))), "html", null, true);
            echo "\" accesskey=\"\"title=\"Modification\">Modifier</a>
                                            </td>
                                        </tr>
                                </td>
                        </table>
                            <tr>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 81
            echo "                                <tr><td colspan=\"4\" style='text-align:center;font:18px Arial bold;'>Vous n'avez pas de frais hors forfait </td></tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                    </table>
            </fieldset>
     </div>
        <a href=\"";
        // line 86
        echo $this->env->getExtension('routing')->getPath("gsb_consultation_frais");
        echo "\" >
            Autre Fiche
        </a> 
        &nbsp;&nbsp;&nbsp;&nbsp;
        <a href = \"";
        // line 90
        echo $this->env->getExtension('routing')->getPath("gsb_homepage_visiteurs");
        echo "\"> 
            Accueil Visiteurs
        </a>
        
";
    }

    // line 3
    public function block_bloc1($context, array $blocks = array())
    {
        // line 4
        echo "<br>
<div class=\"col-md-3\">
    <fieldset class=\"accueil\">
        <table>
            <tr>
                <td>
                    <h2> Bienvenue ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "nom"), "method"), "html", null, true);
        echo " 
                       ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "prenom"), "method"), "html", null, true);
        echo "
                    </h2> 
                </td>
                <td>
                    <h2> Gestion des Fiches de Frais </h2>
                </td>
                <td>
                    <h3>
                    <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("gsb_visiteurs_deconnexion");
        echo "\" 
                        accesskey=\"\"title=\"Déconnexion\">
                        Se déconnecter
                    </a> 
                    </h3>
                </td>
            </tr>
        </table>
    </fieldset>
</div>
";
    }

    public function getTemplateName()
    {
        return "AheGsbBundle:Visiteurs:consultationFrais.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 19,  185 => 11,  181 => 10,  173 => 4,  170 => 3,  161 => 90,  154 => 86,  149 => 83,  142 => 81,  130 => 74,  121 => 68,  117 => 67,  113 => 66,  110 => 65,  105 => 64,  86 => 47,  77 => 46,  74 => 45,  70 => 44,  65 => 41,  56 => 40,  53 => 39,  49 => 38,  38 => 32,  34 => 30,  32 => 3,  29 => 2,);
    }
}
