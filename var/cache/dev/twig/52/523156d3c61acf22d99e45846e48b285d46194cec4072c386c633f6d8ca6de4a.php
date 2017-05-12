<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_cc62a191ce5b0b66830c64a41769b65057fd927fe5614e06397a52c15df909c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5464fff9e89266c77578e9adff08d69499c8c3bae469b85ccfa80a0fcfd57467 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5464fff9e89266c77578e9adff08d69499c8c3bae469b85ccfa80a0fcfd57467->enter($__internal_5464fff9e89266c77578e9adff08d69499c8c3bae469b85ccfa80a0fcfd57467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_da91ce4ad396ab61abd5bf8217733b8569460617734243bc66414d475ca67a66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da91ce4ad396ab61abd5bf8217733b8569460617734243bc66414d475ca67a66->enter($__internal_da91ce4ad396ab61abd5bf8217733b8569460617734243bc66414d475ca67a66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5464fff9e89266c77578e9adff08d69499c8c3bae469b85ccfa80a0fcfd57467->leave($__internal_5464fff9e89266c77578e9adff08d69499c8c3bae469b85ccfa80a0fcfd57467_prof);

        
        $__internal_da91ce4ad396ab61abd5bf8217733b8569460617734243bc66414d475ca67a66->leave($__internal_da91ce4ad396ab61abd5bf8217733b8569460617734243bc66414d475ca67a66_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e096924a16741dda75d9ac12ccc146c0a94fd2607d2e48168fd796e08a71aa30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e096924a16741dda75d9ac12ccc146c0a94fd2607d2e48168fd796e08a71aa30->enter($__internal_e096924a16741dda75d9ac12ccc146c0a94fd2607d2e48168fd796e08a71aa30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_51973139bcad1c9b417b900fb023fd7e73207bce3e4449a8bdc2d9370877b26a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51973139bcad1c9b417b900fb023fd7e73207bce3e4449a8bdc2d9370877b26a->enter($__internal_51973139bcad1c9b417b900fb023fd7e73207bce3e4449a8bdc2d9370877b26a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_51973139bcad1c9b417b900fb023fd7e73207bce3e4449a8bdc2d9370877b26a->leave($__internal_51973139bcad1c9b417b900fb023fd7e73207bce3e4449a8bdc2d9370877b26a_prof);

        
        $__internal_e096924a16741dda75d9ac12ccc146c0a94fd2607d2e48168fd796e08a71aa30->leave($__internal_e096924a16741dda75d9ac12ccc146c0a94fd2607d2e48168fd796e08a71aa30_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "I:\\projects\\mon-nouveau\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
