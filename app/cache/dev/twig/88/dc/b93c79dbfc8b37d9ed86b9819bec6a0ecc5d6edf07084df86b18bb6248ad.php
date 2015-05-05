<?php

/* AheGsbBundle:Visiteurs:modfhf.html.twig */
class __TwigTemplate_88dcb93c79dbfc8b37d9ed86b9819bec6a0ecc5d6edf07084df86b18bb6248ad extends Twig_Template
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
        echo "   ";
        $this->displayBlock('bloc1', $context, $blocks);
        // line 30
        echo "      
            <div class=\"corpsForm\">  
                  <form action=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("gsb_maj_fhf");
        echo "\" method=\"POST\">
                <fieldset>
                    <legend>Frais hors forfait n°";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["num"]) ? $context["num"] : $this->getContext($context, "num")), "html", null, true);
        echo " du ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "d-m-Y"), "html", null, true);
        echo "</legend>
                        <p style='text-align:center;'>
                             <label class=\"col-md-offset-1 col-lg-3\" 
                                   for=\"libelle\"> 
                                Libellé :
                            </label>
                              <input type=\"text\" id=\"libelle\" 
                                   name=\"libelle\" 
                                   
                                   value=\"";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["libelle"]) ? $context["libelle"] : $this->getContext($context, "libelle")), "html", null, true);
        echo "\" >
                              <br>
                            <label class=\"col-md-offset-1 col-lg-3\" 
                                   for=\"date\"> 
                                Date :
                            </label>
                             <input type=\"date\" id=\"date\" 
                                   name='date' 
                                   
                                   value=\"";
        // line 52
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "Y-m-d"), "html", null, true);
        echo "\" >
                             <br>
                             
                               <label class=\"col-md-offset-1 col-lg-3\" 
                                   for=\"montant\"> 
                                Montant :
                            </label>
                            <input type=\"text\" id=\"montant\" 
                                   name=\"montant\" 
                                  
                                   value=\"";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["montant"]) ? $context["montant"] : $this->getContext($context, "montant")), "html", null, true);
        echo "\" >
                        </p>
                    <hr>
                    <input  type=\"hidden\" name=\"idfhf\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["num"]) ? $context["num"] : $this->getContext($context, "num")), "html", null, true);
        echo "\">
                     <input class =\"btn-success\" type=\"submit\" value=\"Mettre à jour\" 
                       name=\"valider\">
                </fieldset>
                </form>
                    <br>
       
        <a href = \"";
        // line 72
        echo $this->env->getExtension('routing')->getPath("gsb_homepage_visiteurs");
        echo "\"> 
            Accueil Visiteurs
        </a>
           
               
            </div>    
        

        <a href=\"/\">  </a>
    </div>
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
        return "AheGsbBundle:Visiteurs:modfhf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 19,  129 => 11,  125 => 10,  117 => 4,  114 => 3,  99 => 72,  89 => 65,  83 => 62,  70 => 52,  58 => 43,  44 => 34,  39 => 32,  35 => 30,  32 => 3,  29 => 2,);
    }
}
