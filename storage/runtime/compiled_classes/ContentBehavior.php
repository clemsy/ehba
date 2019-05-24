<?php // vKjxdNNvRyVbD
/**
 * @link http://craftcms.com/
 * @copyright Copyright (c) Pixel & Tonic, Inc.
 * @license http://craftcms.com/license
 */

namespace craft\behaviors;

use yii\base\Behavior;

/**
 * Content behavior
 *
 * This class provides attributes for all the unique custom field handles.
 */
class ContentBehavior extends Behavior
{
    // Static
    // =========================================================================

    /**
     * @var string[] List of supported field handles.
     */
    public static $fieldHandles = [
        'carouselImage' => true,
        'carouselLegend' => true,
        'clubCity' => true,
        'clubContactEmail' => true,
        'clubContactPerson' => true,
        'clubCountry' => true,
        'clubDetail' => true,
        'clubFacebookUrl' => true,
        'clubInstagramUrl' => true,
        'clubLogo' => true,
        'clubName' => true,
        'clubUrl' => true,
        'documents' => true,
        'eventCity' => true,
        'eventCountry' => true,
        'eventDateFrom' => true,
        'eventDateTo' => true,
        'eventDetail' => true,
        'eventFbEventUrl' => true,
        'eventHostingClub' => true,
        'eventLocation' => true,
        'eventPoster' => true,
        'eventTitle' => true,
        'eventUrl' => true,
        'newsBody' => true,
        'newsDate' => true,
        'newsSummary' => true,
        'newsTags' => true,
        'newsTitle' => true,
        'pageAssets' => true,
        'pageBanner' => true,
        'pageContent' => true,
        'pageMenuTitle' => true,
        'pageParentSection' => true,
        'pageTitle' => true,
        'sectionMenuTitle' => true,
        'sectionTitle' => true,
    ];

    // Properties
    // =========================================================================

    /**
     * @var mixed Value for field with the handle “carouselImage”.
     */
    public $carouselImage;

    /**
     * @var mixed Value for field with the handle “carouselLegend”.
     */
    public $carouselLegend;

    /**
     * @var mixed Value for field with the handle “clubCity”.
     */
    public $clubCity;

    /**
     * @var mixed Value for field with the handle “clubContactEmail”.
     */
    public $clubContactEmail;

    /**
     * @var mixed Value for field with the handle “clubContactPerson”.
     */
    public $clubContactPerson;

    /**
     * @var mixed Value for field with the handle “clubCountry”.
     */
    public $clubCountry;

    /**
     * @var mixed Value for field with the handle “clubDetail”.
     */
    public $clubDetail;

    /**
     * @var mixed Value for field with the handle “clubFacebookUrl”.
     */
    public $clubFacebookUrl;

    /**
     * @var mixed Value for field with the handle “clubInstagramUrl”.
     */
    public $clubInstagramUrl;

    /**
     * @var mixed Value for field with the handle “clubLogo”.
     */
    public $clubLogo;

    /**
     * @var mixed Value for field with the handle “clubName”.
     */
    public $clubName;

    /**
     * @var mixed Value for field with the handle “clubUrl”.
     */
    public $clubUrl;

    /**
     * @var mixed Value for field with the handle “documents”.
     */
    public $documents;

    /**
     * @var mixed Value for field with the handle “eventCity”.
     */
    public $eventCity;

    /**
     * @var mixed Value for field with the handle “eventCountry”.
     */
    public $eventCountry;

    /**
     * @var mixed Value for field with the handle “eventDateFrom”.
     */
    public $eventDateFrom;

    /**
     * @var mixed Value for field with the handle “eventDateTo”.
     */
    public $eventDateTo;

    /**
     * @var mixed Value for field with the handle “eventDetail”.
     */
    public $eventDetail;

    /**
     * @var mixed Value for field with the handle “eventFbEventUrl”.
     */
    public $eventFbEventUrl;

    /**
     * @var mixed Value for field with the handle “eventHostingClub”.
     */
    public $eventHostingClub;

    /**
     * @var mixed Value for field with the handle “eventLocation”.
     */
    public $eventLocation;

    /**
     * @var mixed Value for field with the handle “eventPoster”.
     */
    public $eventPoster;

    /**
     * @var mixed Value for field with the handle “eventTitle”.
     */
    public $eventTitle;

    /**
     * @var mixed Value for field with the handle “eventUrl”.
     */
    public $eventUrl;

    /**
     * @var mixed Value for field with the handle “newsBody”.
     */
    public $newsBody;

    /**
     * @var mixed Value for field with the handle “newsDate”.
     */
    public $newsDate;

    /**
     * @var mixed Value for field with the handle “newsSummary”.
     */
    public $newsSummary;

    /**
     * @var mixed Value for field with the handle “newsTags”.
     */
    public $newsTags;

    /**
     * @var mixed Value for field with the handle “newsTitle”.
     */
    public $newsTitle;

    /**
     * @var mixed Value for field with the handle “pageAssets”.
     */
    public $pageAssets;

    /**
     * @var mixed Value for field with the handle “pageBanner”.
     */
    public $pageBanner;

    /**
     * @var mixed Value for field with the handle “pageContent”.
     */
    public $pageContent;

    /**
     * @var mixed Value for field with the handle “pageMenuTitle”.
     */
    public $pageMenuTitle;

    /**
     * @var mixed Value for field with the handle “pageParentSection”.
     */
    public $pageParentSection;

    /**
     * @var mixed Value for field with the handle “pageTitle”.
     */
    public $pageTitle;

    /**
     * @var mixed Value for field with the handle “sectionMenuTitle”.
     */
    public $sectionMenuTitle;

    /**
     * @var mixed Value for field with the handle “sectionTitle”.
     */
    public $sectionTitle;

    /**
     * @var array Additional custom field values we don’t know about yet.
     */
    private $_customFieldValues = [];

    // Magic Property Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function __isset($name)
    {
        if (isset(self::$fieldHandles[$name])) {
            return true;
        }
        return parent::__isset($name);
    }

    /**
     * @inheritdoc
     */
    public function __get($name)
    {
        if (isset(self::$fieldHandles[$name])) {
            return $this->_customFieldValues[$name] ?? null;
        }
        return parent::__get($name);
    }

    /**
     * @inheritdoc
     */
    public function __set($name, $value)
    {
        if (isset(self::$fieldHandles[$name])) {
            $this->_customFieldValues[$name] = $value;
            return;
        }
        parent::__set($name, $value);
    }

    /**
     * @inheritdoc
     */
    public function canGetProperty($name, $checkVars = true)
    {
        if ($checkVars && isset(self::$fieldHandles[$name])) {
            return true;
        }
        return parent::canGetProperty($name, $checkVars);
    }

    /**
     * @inheritdoc
     */
    public function canSetProperty($name, $checkVars = true)
    {
        if ($checkVars && isset(self::$fieldHandles[$name])) {
            return true;
        }
        return parent::canSetProperty($name, $checkVars);
    }
}
