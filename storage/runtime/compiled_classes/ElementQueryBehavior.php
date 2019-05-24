<?php // vKjxdNNvRyVbD
/**
 * @link http://craftcms.com/
 * @copyright Copyright (c) Pixel & Tonic, Inc.
 * @license http://craftcms.com/license
 */

namespace craft\behaviors;

/**
 * Element Query behavior
 *
 * This class provides attributes for all the unique custom field handles.
 *
 * @method self carouselImage(mixed $value) Sets the [[carouselImage]] property
 * @method self carouselLegend(mixed $value) Sets the [[carouselLegend]] property
 * @method self clubCity(mixed $value) Sets the [[clubCity]] property
 * @method self clubContactEmail(mixed $value) Sets the [[clubContactEmail]] property
 * @method self clubContactPerson(mixed $value) Sets the [[clubContactPerson]] property
 * @method self clubCountry(mixed $value) Sets the [[clubCountry]] property
 * @method self clubDetail(mixed $value) Sets the [[clubDetail]] property
 * @method self clubFacebookUrl(mixed $value) Sets the [[clubFacebookUrl]] property
 * @method self clubInstagramUrl(mixed $value) Sets the [[clubInstagramUrl]] property
 * @method self clubLogo(mixed $value) Sets the [[clubLogo]] property
 * @method self clubName(mixed $value) Sets the [[clubName]] property
 * @method self clubUrl(mixed $value) Sets the [[clubUrl]] property
 * @method self documents(mixed $value) Sets the [[documents]] property
 * @method self eventCity(mixed $value) Sets the [[eventCity]] property
 * @method self eventCountry(mixed $value) Sets the [[eventCountry]] property
 * @method self eventDateFrom(mixed $value) Sets the [[eventDateFrom]] property
 * @method self eventDateTo(mixed $value) Sets the [[eventDateTo]] property
 * @method self eventDetail(mixed $value) Sets the [[eventDetail]] property
 * @method self eventFbEventUrl(mixed $value) Sets the [[eventFbEventUrl]] property
 * @method self eventHostingClub(mixed $value) Sets the [[eventHostingClub]] property
 * @method self eventLocation(mixed $value) Sets the [[eventLocation]] property
 * @method self eventPoster(mixed $value) Sets the [[eventPoster]] property
 * @method self eventTitle(mixed $value) Sets the [[eventTitle]] property
 * @method self eventUrl(mixed $value) Sets the [[eventUrl]] property
 * @method self newsBody(mixed $value) Sets the [[newsBody]] property
 * @method self newsDate(mixed $value) Sets the [[newsDate]] property
 * @method self newsSummary(mixed $value) Sets the [[newsSummary]] property
 * @method self newsTags(mixed $value) Sets the [[newsTags]] property
 * @method self newsTitle(mixed $value) Sets the [[newsTitle]] property
 * @method self pageAssets(mixed $value) Sets the [[pageAssets]] property
 * @method self pageBanner(mixed $value) Sets the [[pageBanner]] property
 * @method self pageContent(mixed $value) Sets the [[pageContent]] property
 * @method self pageMenuTitle(mixed $value) Sets the [[pageMenuTitle]] property
 * @method self pageParentSection(mixed $value) Sets the [[pageParentSection]] property
 * @method self pageTitle(mixed $value) Sets the [[pageTitle]] property
 * @method self sectionMenuTitle(mixed $value) Sets the [[sectionMenuTitle]] property
 * @method self sectionTitle(mixed $value) Sets the [[sectionTitle]] property
 */
class ElementQueryBehavior extends ContentBehavior
{
    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function __call($name, $params)
    {
        if (isset(self::$fieldHandles[$name]) && count($params) === 1) {
            $this->$name = $params[0];
            return $this->owner;
        }
        return parent::__call($name, $params);
    }

    /**
     * @inheritdoc
     */
    public function hasMethod($name)
    {
        if (isset(self::$fieldHandles[$name])) {
            return true;
        }
        return parent::hasMethod($name);
    }
}
