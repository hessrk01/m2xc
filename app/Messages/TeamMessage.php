<?php

namespace App\Messages;

use Closure;

class TeamMessage
{
    
    public $colorError = 'FF8686';
    public $colorInfo = 'F0F0F0';
    public $colorSuccess = '86A5FF';
    public $colorWarning = 'FAFF90';

    // Card fields
    /**
     * Summary
     * The summary property is typically displayed in the list view in Outlook,
     * as a way to quickly determine what the card is all about.
     * @var string
     */
    public $summary;

    /**
     * ThemeColor
     * Specifies a custom brand color for the card. 
     * The color will be displayed in a non-obtrusive manner,
     * in Hex
     * @var string
     */
    public $themeColor;

    /**
     * Title
     * The title property is meant to be rendered in a prominent way, 
     * at the very top of the card. Use it to introduce the content 
     * of the card in such a way users will immediately know what to expect.
     * @var string
     */
    public $title;

    /**
     * Text
     * The text property is meant to be displayed in a normal font 
     * below the card's title. Use it to display content, such as the 
     * description of the entity being referenced, 
     * or an abstract of a news article.
     * @var string
     */
    public $text;

    // Section fields
    
    /**
     * StartGroup
     * When set to true, the startGroup property marks 
     * the start of a logical group of information
     * @var bool
     */
    public $startGroup = true;

    /**
     * Section Title
     * @var string
     */
    public $sectionTitle;

    /**
     * Section Text
     * @var string
     */
    public $sectionText;

    /**
     * ActivityImage
     * Associated image
     * @var string
     */
    public $activityImage;

    /**
     * ActivityTitle
     * Associated title
     * @var string
     */
    public $activityTitle;

    /**
     * ActivitySubtitle
     * Associated subtitle
     * @var string
     */
    public $activitySubtitle;

    /**
     * ActivityText
     * Associated text
     * @var string
     */
    public $activityText;

    /**
     * HeroImage
     * Included image
     * @var string
     */
    public $heroImage;
 
    /**
     * Additional request options for the Guzzle HTTP client.
     *
     * @var array
     */
    public $http = [];
    
    public function __construct()
    {
        $this->themeColor = $this->info();
    }

    /**
     * Create a new instance of TeamMessage.
     *
     * @param string $content
     * @return static
     */
    public static function create($content = '')
    {
        return new static($content);
    }

    /**
     * Set card colors
     */
    public function error()
    {
        $this->themeColor = $this->colorError;
        return $this;
    }
    public function info()
    {
        $this->themeColor = $this->colorInfo;
        return $this;
    }
    public function success()
    {
        $this->themeColor = $this->colorSuccess;
        return $this;
    }
    public function warning()
    {
        $this->themeColor = $this->colorWarning;
        return $this;
    }

    public function summary($content)
    {
        $this->summary = $content;
        return $this;
    }

    public function title($content)
    {
        $this->title = $content;
        return $this;
    }

    public function text($content)
    {
        $this->text = $content;
        return $this;
    }

    public function sectionTitle($content)
    {
        $this->sectionTitle = $content;
        return $this;
    }

    public function sectionText($content)
    {
        $this->sectionText = $content;
        return $this;
    }

    public function activityImage($content)
    {
        $this->activityImage = $content;
        return $this;
    }

    public function activityTitle($content)
    {
        $this->activityTitle = $content;
        return $this;
    }

    public function activityText($content)
    {
        $this->activityText = $content;
        return $this;
    }

    public function heroImage($content)
    {
        $this->heroImage = $content;
        return $this;
    }

}