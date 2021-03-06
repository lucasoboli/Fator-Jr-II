<?php

/* newsletter/templates/blocks/posts/settingsDisplayOptions.hbs */
class __TwigTemplate_8f348cdc276e1ff8f69ffafa008bfa57286aa1e41e9ba4ef14d2545830f307dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"mailpoet_form_field\">
    <div class=\"mailpoet_form_field_radio_option\">
        <label>
            <input type=\"radio\" name=\"mailpoet_posts_display_type\" class=\"mailpoet_posts_display_type\" value=\"excerpt\" {{#ifCond model.displayType '==' 'excerpt'}}CHECKED{{/ifCond}}/>
            ";
        // line 5
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Excerpt");
        echo "
        </label>
    </div>
    <div class=\"mailpoet_form_field_radio_option\">
        <label>
            <input type=\"radio\" name=\"mailpoet_posts_display_type\" class=\"mailpoet_posts_display_type\" value=\"full\" {{#ifCond model.displayType '==' 'full'}}CHECKED{{/ifCond}}/>
            ";
        // line 11
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Full post");
        echo "
        </label>
    </div>
    <div class=\"mailpoet_form_field_radio_option\">
        <label>
            <input type=\"radio\" name=\"mailpoet_posts_display_type\" class=\"mailpoet_posts_display_type\" value=\"titleOnly\" {{#ifCond model.displayType '==' 'titleOnly'}}CHECKED{{/ifCond}} />
            ";
        // line 17
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Title only");
        echo "
        </label>
    </div>
</div>

<hr class=\"mailpoet_separator\" />

<div class=\"mailpoet_form_field\">
    <div class=\"mailpoet_form_field_title\">";
        // line 25
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Title Format");
        echo "</div>
    <div class=\"mailpoet_form_field_radio_option\">
        <label>
            <input type=\"radio\" name=\"mailpoet_posts_title_format\" class=\"mailpoet_posts_title_format\" value=\"h1\" {{#ifCond model.titleFormat '==' 'h1'}}CHECKED{{/ifCond}}/>
            ";
        // line 29
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Heading 1");
        echo "
        </label>
    </div>
    <div class=\"mailpoet_form_field_radio_option\">
        <label>
            <input type=\"radio\" name=\"mailpoet_posts_title_format\" class=\"mailpoet_posts_title_format\" value=\"h2\" {{#ifCond model.titleFormat '==' 'h2'}}CHECKED{{/ifCond}}/>
            ";
        // line 35
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Heading 2");
        echo "
        </label>
    </div>
    <div class=\"mailpoet_form_field_radio_option\">
        <label>
            <input type=\"radio\" name=\"mailpoet_posts_title_format\" class=\"mailpoet_posts_title_format\" value=\"h3\" {{#ifCond model.titleFormat '==' 'h3'}}CHECKED{{/ifCond}}/>
            ";
        // line 41
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Heading 3");
        echo "
        </label>
    </div>
    <div class=\"mailpoet_form_field_radio_option mailpoet_posts_title_as_list {{#ifCond model.titleFormat '!=' 'titleOnly'}}mailpoet_hidden{{/ifCond}}\">
        <label>
            <input type=\"radio\" name=\"mailpoet_posts_title_format\" class=\"mailpoet_posts_title_format\" value=\"ul\" {{#ifCond model.titleFormat '==' 'ul'}}CHECKED{{/ifCond}}/>
            ";
        // line 47
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Show as list");
        echo "
        </label>
    </div>
</div>

<div class=\"mailpoet_form_field\">
    <div class=\"mailpoet_form_field_title\">";
        // line 53
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Title Alignment");
        echo "</div>
    <div class=\"mailpoet_form_field_radio_option\">
        <label>
            <input type=\"radio\" name=\"mailpoet_posts_title_alignment\" class=\"mailpoet_posts_title_alignment\" value=\"left\" {{#ifCond model.titleAlignment '==' 'left'}}CHECKED{{/ifCond}} />
            ";
        // line 57
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Left");
        echo "
        </label>
    </div>
    <div class=\"mailpoet_form_field_radio_option\">
        <label>
            <input type=\"radio\" name=\"mailpoet_posts_title_alignment\" class=\"mailpoet_posts_title_alignment\" value=\"center\" {{#ifCond model.titleAlignment '==' 'center'}}CHECKED{{/ifCond}} />
            ";
        // line 63
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Center");
        echo "
        </label>
    </div>
    <div class=\"mailpoet_form_field_radio_option\">
        <label>
            <input type=\"radio\" name=\"mailpoet_posts_title_alignment\" class=\"mailpoet_posts_title_alignment\" value=\"right\" {{#ifCond model.titleAlignment '==' 'right'}}CHECKED{{/ifCond}} />
            ";
        // line 69
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Right");
        echo "
        </label>
    </div>
</div>

<div class=\"mailpoet_form_field mailpoet_posts_title_as_link {{#ifCond model.titleFormat '===' 'ul'}}mailpoet_hidden{{/ifCond}}\">
    <div class=\"mailpoet_form_field_title\">";
        // line 75
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Make the post title into a link");
        echo "</div>
    <div class=\"mailpoet_form_field_radio_option\">
        <label>
            <input type=\"radio\" name=\"mailpoet_posts_title_as_links\" class=\"mailpoet_posts_title_as_links\" value=\"true\" {{#if model.titleIsLink}}CHECKED{{/if}}/>
            ";
        // line 79
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Yes");
        echo "
        </label>
    </div>
    <div class=\"mailpoet_form_field_radio_option\">
        <label>
            <input type=\"radio\" name=\"mailpoet_posts_title_as_links\" class=\"mailpoet_posts_title_as_links\" value=\"false\" {{#unless model.titleIsLink}}CHECKED{{/unless}}/>
            ";
        // line 85
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("No");
        echo "
        </label>
    </div>
</div>

<hr class=\"mailpoet_separator mailpoet_posts_image_separator {{#ifCond model.displayType '===' 'titleOnly'}}mailpoet_hidden{{/ifCond}}\" />

<div class=\"mailpoet_posts_non_title_list_options {{#ifCond model.displayType '==' 'titleOnly'}}{{#ifCond model.titleFormat '==' 'ul'}}mailpoet_hidden{{/ifCond}}{{/ifCond}}\">

    <div class=\"mailpoet_form_field mailpoet_posts_featured_image_position_container {{#ifCond model.displayType '!==' 'excerpt'}}mailpoet_hidden{{/ifCond}}\">
        <div class=\"mailpoet_form_field_title\">";
        // line 95
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Featured image position");
        echo "</div>
        <div class=\"mailpoet_form_field_radio_option\">
            <label>
                <input type=\"radio\" name=\"mailpoet_posts_featured_image_position\" class=\"mailpoet_posts_featured_image_position\" value=\"belowTitle\" {{#ifCond model.featuredImagePosition '==' 'belowTitle' }}CHECKED{{/ifCond}}/>
                ";
        // line 99
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Below title");
        echo "
            </label>
        </div>
        <div class=\"mailpoet_form_field_radio_option\">
            <label>
                <input type=\"radio\" name=\"mailpoet_posts_featured_image_position\" class=\"mailpoet_posts_featured_image_position\" value=\"aboveTitle\" {{#ifCond model.featuredImagePosition '==' 'aboveTitle' }}CHECKED{{/ifCond}}/>
                ";
        // line 105
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Above block");
        echo "
            </label>
        </div>
        <div class=\"mailpoet_form_field_radio_option\">
            <label>
                <input type=\"radio\" name=\"mailpoet_posts_featured_image_position\" class=\"mailpoet_posts_featured_image_position\" value=\"none\" {{#ifCond model.featuredImagePosition '==' 'none' }}CHECKED{{/ifCond}}/>
                ";
        // line 111
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("None");
        echo "
            </label>
        </div>
    </div>

    <div class=\"mailpoet_form_field mailpoet_posts_image_full_width_option {{#ifCond model.displayType '==' 'titleOnly'}}mailpoet_hidden{{/ifCond}}\">
        <div class=\"mailpoet_form_field_title\">";
        // line 117
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Image width");
        echo "</div>
        <div class=\"mailpoet_form_field_radio_option\">
            <label>
                <input type=\"radio\" name=\"imageFullWidth\" class=\"mailpoet_posts_image_full_width\" value=\"true\" {{#if model.imageFullWidth}}CHECKED{{/if}}/>
                ";
        // line 121
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Full width");
        echo "
            </label>
        </div>
        <div class=\"mailpoet_form_field_radio_option\">
            <label>
                <input type=\"radio\" name=\"imageFullWidth\" class=\"mailpoet_posts_image_full_width\" value=\"false\" {{#unless model.imageFullWidth}}CHECKED{{/unless}}/>
                ";
        // line 127
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Padded");
        echo "
            </label>
        </div>
    </div>

    <hr class=\"mailpoet_separator\" />

    <div class=\"mailpoet_form_field\">
        <div class=\"mailpoet_form_field_title\">";
        // line 135
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Show author");
        echo "</div>
        <div class=\"mailpoet_form_field_radio_option\">
            <label>
                <input type=\"radio\" name=\"mailpoet_posts_show_author\" class=\"mailpoet_posts_show_author\" value=\"no\" {{#ifCond model.showAuthor '==' 'no'}}CHECKED{{/ifCond}}/>
                ";
        // line 139
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("No");
        echo "
            </label>
        </div>
        <div class=\"mailpoet_form_field_radio_option\">
            <label>
                <input type=\"radio\" name=\"mailpoet_posts_show_author\" class=\"mailpoet_posts_show_author\" value=\"aboveText\" {{#ifCond model.showAuthor '==' 'aboveText'}}CHECKED{{/ifCond}}/>
                ";
        // line 145
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Above text");
        echo "
            </label>
        </div>
        <div class=\"mailpoet_form_field_radio_option\">
            <label>
                <input type=\"radio\" name=\"mailpoet_posts_show_author\" class=\"mailpoet_posts_show_author\" value=\"belowText\" {{#ifCond model.showAuthor '==' 'belowText'}}CHECKED{{/ifCond}}/>
                ";
        // line 151
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Below text");
        echo "<br />
            </label>
        </div>
        <div class=\"mailpoet_form_field_title mailpoet_form_field_title_small\">";
        // line 154
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Preceded by:");
        echo "</div>
        <div class=\"mailpoet_form_field_input_option mailpoet_form_field_block\">
            <input type=\"text\" class=\"mailpoet_input mailpoet_input_full mailpoet_posts_author_preceded_by\" value=\"{{ model.authorPrecededBy }}\" />
        </div>
    </div>

    <div class=\"mailpoet_form_field\">
        <div class=\"mailpoet_form_field_title\">";
        // line 161
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Show categories");
        echo "</div>
        <div class=\"mailpoet_form_field_radio_option\">
            <label>
                <input type=\"radio\" name=\"mailpoet_posts_show_categories\" class=\"mailpoet_posts_show_categories\" value=\"no\" {{#ifCond model.showCategories '==' 'no'}}CHECKED{{/ifCond}}/>
                ";
        // line 165
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("No");
        echo "
            </label>
        </div>
        <div class=\"mailpoet_form_field_radio_option\">
            <label>
                <input type=\"radio\" name=\"mailpoet_posts_show_categories\" class=\"mailpoet_posts_show_categories\" value=\"aboveText\" {{#ifCond model.showCategories '==' 'aboveText'}}CHECKED{{/ifCond}}/>
                ";
        // line 171
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Above text");
        echo "
            </label>
        </div>
        <div class=\"mailpoet_form_field_radio_option\">
            <label>
                <input type=\"radio\" name=\"mailpoet_posts_show_categories\" class=\"mailpoet_posts_show_categories\" value=\"belowText\" {{#ifCond model.showCategories '==' 'belowText'}}CHECKED{{/ifCond}}/>
                ";
        // line 177
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Below text");
        echo "
            </label>
        </div>
        <div class=\"mailpoet_form_field_title mailpoet_form_field_title_small\">";
        // line 180
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Preceded by:");
        echo "</div>
        <div class=\"mailpoet_form_field_input_option mailpoet_form_field_block\">
            <input type=\"text\" class=\"mailpoet_input mailpoet_input_full mailpoet_posts_categories\" value=\"{{ model.categoriesPrecededBy }}\" />
        </div>
    </div>

    <hr class=\"mailpoet_separator\" />

    <div class=\"mailpoet_form_field\">
        <div class=\"mailpoet_form_field_title mailpoet_form_field_title_small\">";
        // line 189
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("\"Read more\" text");
        echo "</div>
        <div class=\"mailpoet_form_field_radio_option\">
            <label>
                <input type=\"radio\" name=\"mailpoet_posts_read_more_type\" class=\"mailpoet_posts_read_more_type\" value=\"link\" {{#ifCond model.readMoreType '==' 'link'}}CHECKED{{/ifCond}}/>
                ";
        // line 193
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Link");
        echo "
            </label>
        </div>
        <div class=\"mailpoet_form_field_radio_option\">
            <label>
                <input type=\"radio\" name=\"mailpoet_posts_read_more_type\" class=\"mailpoet_posts_read_more_type\" value=\"button\" {{#ifCond model.readMoreType '==' 'button'}}CHECKED{{/ifCond}}/>
                ";
        // line 199
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Button");
        echo "
            </label>
        </div>

        <div class=\"mailpoet_form_field_input_option mailpoet_form_field_block\">
            <input type=\"text\" class=\"mailpoet_input mailpoet_input_full mailpoet_posts_read_more_text {{#ifCond model.readMoreType '!=' 'link'}}mailpoet_hidden{{/ifCond}}\" value=\"{{ model.readMoreText }}\" />
        </div>

        <div class=\"mailpoet_form_field_input_option mailpoet_form_field_block\">
            <a href=\"javascript:;\" class=\"mailpoet_posts_select_button {{#ifCond model.readMoreType '!=' 'button'}}mailpoet_hidden{{/ifCond}}\">";
        // line 208
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Design a button");
        echo "</a>
        </div>
    </div>

    <hr class=\"mailpoet_separator\" />
</div>

<div class=\"mailpoet_posts_non_title_list_options {{#ifCond model.displayType '==' 'titleOnly'}}{{#ifCond model.titleFormat '==' 'ul'}}mailpoet_hidden{{/ifCond}}{{/ifCond}}\">
    <div class=\"mailpoet_form_field\">
        <div class=\"mailpoet_form_field_title mailpoet_form_field_title_small mailpoet_form_field_title_inline\">";
        // line 217
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Show divider between posts");
        echo "</div>
        <div class=\"mailpoet_form_field_radio_option\">
            <label>
                <input type=\"radio\" name=\"mailpoet_posts_show_divider\" class=\"mailpoet_posts_show_divider\" value=\"true\" {{#if model.showDivider}}CHECKED{{/if}}/>
                ";
        // line 221
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Yes");
        echo "
            </label>
        </div>
        <div class=\"mailpoet_form_field_radio_option\">
            <label>
                <input type=\"radio\" name=\"mailpoet_posts_show_divider\"class=\"mailpoet_posts_show_divider\" value=\"false\" {{#unless model.showDivider}}CHECKED{{/unless}}/>
                ";
        // line 227
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("No");
        echo "
            </label>
        </div>
        <div class=\"mailpoet_form_field_input_option\">
            <a href=\"javascript:;\" class=\"mailpoet_posts_select_divider\">";
        // line 231
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Select divider");
        echo "</a>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "newsletter/templates/blocks/posts/settingsDisplayOptions.hbs";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  368 => 231,  361 => 227,  352 => 221,  345 => 217,  333 => 208,  321 => 199,  312 => 193,  305 => 189,  293 => 180,  287 => 177,  278 => 171,  269 => 165,  262 => 161,  252 => 154,  246 => 151,  237 => 145,  228 => 139,  221 => 135,  210 => 127,  201 => 121,  194 => 117,  185 => 111,  176 => 105,  167 => 99,  160 => 95,  147 => 85,  138 => 79,  131 => 75,  122 => 69,  113 => 63,  104 => 57,  97 => 53,  88 => 47,  79 => 41,  70 => 35,  61 => 29,  54 => 25,  43 => 17,  34 => 11,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "newsletter/templates/blocks/posts/settingsDisplayOptions.hbs", "/var/www/fatorjunior.com.br/wp-content/plugins/mailpoet/views/newsletter/templates/blocks/posts/settingsDisplayOptions.hbs");
    }
}
