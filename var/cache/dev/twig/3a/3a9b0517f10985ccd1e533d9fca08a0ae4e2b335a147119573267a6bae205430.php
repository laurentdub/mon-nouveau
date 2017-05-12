<?php

/* base.html.twig */
class __TwigTemplate_cacf579b6000f723f17482e8fbcf34b983262632f4c235fe52e12381e458265c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aa1bb66960bbe145c332698cd87fd801accea5599c23a7561c119d9fedf870c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa1bb66960bbe145c332698cd87fd801accea5599c23a7561c119d9fedf870c9->enter($__internal_aa1bb66960bbe145c332698cd87fd801accea5599c23a7561c119d9fedf870c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_dedac840356d0706f1b78a488c424ff4458e940cb5ddd5b705bdff28f6064e44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dedac840356d0706f1b78a488c424ff4458e940cb5ddd5b705bdff28f6064e44->enter($__internal_dedac840356d0706f1b78a488c424ff4458e940cb5ddd5b705bdff28f6064e44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_aa1bb66960bbe145c332698cd87fd801accea5599c23a7561c119d9fedf870c9->leave($__internal_aa1bb66960bbe145c332698cd87fd801accea5599c23a7561c119d9fedf870c9_prof);

        
        $__internal_dedac840356d0706f1b78a488c424ff4458e940cb5ddd5b705bdff28f6064e44->leave($__internal_dedac840356d0706f1b78a488c424ff4458e940cb5ddd5b705bdff28f6064e44_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_96ec8ce37c7fd9bb44740ec1d0f5f407664efe6f650f577e50c490d4e1bdd1bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96ec8ce37c7fd9bb44740ec1d0f5f407664efe6f650f577e50c490d4e1bdd1bf->enter($__internal_96ec8ce37c7fd9bb44740ec1d0f5f407664efe6f650f577e50c490d4e1bdd1bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e386e303a5443b67110575dd389617c05695fa2ec4f4a1fab8251edecdb34c0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e386e303a5443b67110575dd389617c05695fa2ec4f4a1fab8251edecdb34c0f->enter($__internal_e386e303a5443b67110575dd389617c05695fa2ec4f4a1fab8251edecdb34c0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e386e303a5443b67110575dd389617c05695fa2ec4f4a1fab8251edecdb34c0f->leave($__internal_e386e303a5443b67110575dd389617c05695fa2ec4f4a1fab8251edecdb34c0f_prof);

        
        $__internal_96ec8ce37c7fd9bb44740ec1d0f5f407664efe6f650f577e50c490d4e1bdd1bf->leave($__internal_96ec8ce37c7fd9bb44740ec1d0f5f407664efe6f650f577e50c490d4e1bdd1bf_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c567b87c043dcc5356d6f2a0b55ff6e59b079fd2807c2f8028cf7e689dca54a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c567b87c043dcc5356d6f2a0b55ff6e59b079fd2807c2f8028cf7e689dca54a6->enter($__internal_c567b87c043dcc5356d6f2a0b55ff6e59b079fd2807c2f8028cf7e689dca54a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_53df17bacd4206085e2de1f888ad5ccaadb00eff5b6a3f4969de253383700ca6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53df17bacd4206085e2de1f888ad5ccaadb00eff5b6a3f4969de253383700ca6->enter($__internal_53df17bacd4206085e2de1f888ad5ccaadb00eff5b6a3f4969de253383700ca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_53df17bacd4206085e2de1f888ad5ccaadb00eff5b6a3f4969de253383700ca6->leave($__internal_53df17bacd4206085e2de1f888ad5ccaadb00eff5b6a3f4969de253383700ca6_prof);

        
        $__internal_c567b87c043dcc5356d6f2a0b55ff6e59b079fd2807c2f8028cf7e689dca54a6->leave($__internal_c567b87c043dcc5356d6f2a0b55ff6e59b079fd2807c2f8028cf7e689dca54a6_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_871811ee2285e89dfaee9b451c91e3fb2efd09d4b8067b9aa768416fe31d3616 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_871811ee2285e89dfaee9b451c91e3fb2efd09d4b8067b9aa768416fe31d3616->enter($__internal_871811ee2285e89dfaee9b451c91e3fb2efd09d4b8067b9aa768416fe31d3616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c612a83043f34c78089903149b5170006ce76aec21fd0b80e16fa55094baebb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c612a83043f34c78089903149b5170006ce76aec21fd0b80e16fa55094baebb4->enter($__internal_c612a83043f34c78089903149b5170006ce76aec21fd0b80e16fa55094baebb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c612a83043f34c78089903149b5170006ce76aec21fd0b80e16fa55094baebb4->leave($__internal_c612a83043f34c78089903149b5170006ce76aec21fd0b80e16fa55094baebb4_prof);

        
        $__internal_871811ee2285e89dfaee9b451c91e3fb2efd09d4b8067b9aa768416fe31d3616->leave($__internal_871811ee2285e89dfaee9b451c91e3fb2efd09d4b8067b9aa768416fe31d3616_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_86186c0e325ffb25cf0f92a89b60ee41d64d04923dcf380930348a2e0b9d66c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86186c0e325ffb25cf0f92a89b60ee41d64d04923dcf380930348a2e0b9d66c9->enter($__internal_86186c0e325ffb25cf0f92a89b60ee41d64d04923dcf380930348a2e0b9d66c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_140457d52771f695b6430973928b5c2cf63f97409064ad21570a815dd4a5f148 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_140457d52771f695b6430973928b5c2cf63f97409064ad21570a815dd4a5f148->enter($__internal_140457d52771f695b6430973928b5c2cf63f97409064ad21570a815dd4a5f148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_140457d52771f695b6430973928b5c2cf63f97409064ad21570a815dd4a5f148->leave($__internal_140457d52771f695b6430973928b5c2cf63f97409064ad21570a815dd4a5f148_prof);

        
        $__internal_86186c0e325ffb25cf0f92a89b60ee41d64d04923dcf380930348a2e0b9d66c9->leave($__internal_86186c0e325ffb25cf0f92a89b60ee41d64d04923dcf380930348a2e0b9d66c9_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "I:\\projects\\mon-nouveau\\app\\Resources\\views\\base.html.twig");
    }
}
