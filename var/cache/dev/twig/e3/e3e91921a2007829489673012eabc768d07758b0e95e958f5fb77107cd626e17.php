<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_b587731a82fa1e2a9442bec2a9e1c3f0902ff01ccf9312478ac026d0fe404f7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_335679adaebea8dd287361c7b23ff033b62dcc2db7d8ec349d0d34eda67233de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_335679adaebea8dd287361c7b23ff033b62dcc2db7d8ec349d0d34eda67233de->enter($__internal_335679adaebea8dd287361c7b23ff033b62dcc2db7d8ec349d0d34eda67233de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_4aea558a83381f06c9ac151235b1fae418638e7f5b5e0423abae5bf0dd612c6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aea558a83381f06c9ac151235b1fae418638e7f5b5e0423abae5bf0dd612c6b->enter($__internal_4aea558a83381f06c9ac151235b1fae418638e7f5b5e0423abae5bf0dd612c6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_335679adaebea8dd287361c7b23ff033b62dcc2db7d8ec349d0d34eda67233de->leave($__internal_335679adaebea8dd287361c7b23ff033b62dcc2db7d8ec349d0d34eda67233de_prof);

        
        $__internal_4aea558a83381f06c9ac151235b1fae418638e7f5b5e0423abae5bf0dd612c6b->leave($__internal_4aea558a83381f06c9ac151235b1fae418638e7f5b5e0423abae5bf0dd612c6b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9958cdf7b1d58bf15c058a05938192b65ed38e82b3cf503c36747b62613f2c93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9958cdf7b1d58bf15c058a05938192b65ed38e82b3cf503c36747b62613f2c93->enter($__internal_9958cdf7b1d58bf15c058a05938192b65ed38e82b3cf503c36747b62613f2c93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6b0373bbaf43198773d04d3671b47244d13a1b2c2b0065a65e5b205a4aea0f93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b0373bbaf43198773d04d3671b47244d13a1b2c2b0065a65e5b205a4aea0f93->enter($__internal_6b0373bbaf43198773d04d3671b47244d13a1b2c2b0065a65e5b205a4aea0f93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_6b0373bbaf43198773d04d3671b47244d13a1b2c2b0065a65e5b205a4aea0f93->leave($__internal_6b0373bbaf43198773d04d3671b47244d13a1b2c2b0065a65e5b205a4aea0f93_prof);

        
        $__internal_9958cdf7b1d58bf15c058a05938192b65ed38e82b3cf503c36747b62613f2c93->leave($__internal_9958cdf7b1d58bf15c058a05938192b65ed38e82b3cf503c36747b62613f2c93_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_db1de2cbf3544a15424b4510e2a471388b4b6e6ef6c31cc9475d21eafcb6a6e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db1de2cbf3544a15424b4510e2a471388b4b6e6ef6c31cc9475d21eafcb6a6e8->enter($__internal_db1de2cbf3544a15424b4510e2a471388b4b6e6ef6c31cc9475d21eafcb6a6e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_137ada4ec09417ed6842e2c2bdb537c52f78768f3ddc7077275e5f721e242f4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_137ada4ec09417ed6842e2c2bdb537c52f78768f3ddc7077275e5f721e242f4d->enter($__internal_137ada4ec09417ed6842e2c2bdb537c52f78768f3ddc7077275e5f721e242f4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_137ada4ec09417ed6842e2c2bdb537c52f78768f3ddc7077275e5f721e242f4d->leave($__internal_137ada4ec09417ed6842e2c2bdb537c52f78768f3ddc7077275e5f721e242f4d_prof);

        
        $__internal_db1de2cbf3544a15424b4510e2a471388b4b6e6ef6c31cc9475d21eafcb6a6e8->leave($__internal_db1de2cbf3544a15424b4510e2a471388b4b6e6ef6c31cc9475d21eafcb6a6e8_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a461785465404b06ca7852cf5a66091e2bacf5942850635fe865d5fb3314702c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a461785465404b06ca7852cf5a66091e2bacf5942850635fe865d5fb3314702c->enter($__internal_a461785465404b06ca7852cf5a66091e2bacf5942850635fe865d5fb3314702c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5486b278b9ec8fa73a4a14c3ebd628f3ece09c4252dc39e6b835769c47a85fe0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5486b278b9ec8fa73a4a14c3ebd628f3ece09c4252dc39e6b835769c47a85fe0->enter($__internal_5486b278b9ec8fa73a4a14c3ebd628f3ece09c4252dc39e6b835769c47a85fe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_5486b278b9ec8fa73a4a14c3ebd628f3ece09c4252dc39e6b835769c47a85fe0->leave($__internal_5486b278b9ec8fa73a4a14c3ebd628f3ece09c4252dc39e6b835769c47a85fe0_prof);

        
        $__internal_a461785465404b06ca7852cf5a66091e2bacf5942850635fe865d5fb3314702c->leave($__internal_a461785465404b06ca7852cf5a66091e2bacf5942850635fe865d5fb3314702c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "I:\\projects\\mon-nouveau\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
