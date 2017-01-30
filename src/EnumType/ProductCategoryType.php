<?php

namespace PayPal\EnumType;

/**
 * This class stands for ProductCategoryType EnumType
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ProductCategoryType
{
    /**
     * Constant for value 'Other'
     * @return string 'Other'
     */
    const VALUE_OTHER = 'Other';
    /**
     * Constant for value 'Airlines'
     * @return string 'Airlines'
     */
    const VALUE_AIRLINES = 'Airlines';
    /**
     * Constant for value 'Antiques'
     * @return string 'Antiques'
     */
    const VALUE_ANTIQUES = 'Antiques';
    /**
     * Constant for value 'Art'
     * @return string 'Art'
     */
    const VALUE_ART = 'Art';
    /**
     * Constant for value 'Cameras_Photos'
     * @return string 'Cameras_Photos'
     */
    const VALUE_CAMERAS_PHOTOS = 'Cameras_Photos';
    /**
     * Constant for value 'Cars_Boats_Vehicles_Parts'
     * @return string 'Cars_Boats_Vehicles_Parts'
     */
    const VALUE_CARS_BOATS_VEHICLES_PARTS = 'Cars_Boats_Vehicles_Parts';
    /**
     * Constant for value 'CellPhones_Telecom'
     * @return string 'CellPhones_Telecom'
     */
    const VALUE_CELL_PHONES_TELECOM = 'CellPhones_Telecom';
    /**
     * Constant for value 'Coins_PaperMoney'
     * @return string 'Coins_PaperMoney'
     */
    const VALUE_COINS_PAPER_MONEY = 'Coins_PaperMoney';
    /**
     * Constant for value 'Collectibles'
     * @return string 'Collectibles'
     */
    const VALUE_COLLECTIBLES = 'Collectibles';
    /**
     * Constant for value 'Computers_Networking'
     * @return string 'Computers_Networking'
     */
    const VALUE_COMPUTERS_NETWORKING = 'Computers_Networking';
    /**
     * Constant for value 'ConsumerElectronics'
     * @return string 'ConsumerElectronics'
     */
    const VALUE_CONSUMER_ELECTRONICS = 'ConsumerElectronics';
    /**
     * Constant for value 'Jewelry_Watches'
     * @return string 'Jewelry_Watches'
     */
    const VALUE_JEWELRY_WATCHES = 'Jewelry_Watches';
    /**
     * Constant for value 'MusicalInstruments'
     * @return string 'MusicalInstruments'
     */
    const VALUE_MUSICAL_INSTRUMENTS = 'MusicalInstruments';
    /**
     * Constant for value 'RealEstate'
     * @return string 'RealEstate'
     */
    const VALUE_REAL_ESTATE = 'RealEstate';
    /**
     * Constant for value 'SportsMemorabilia_Cards_FanShop'
     * @return string 'SportsMemorabilia_Cards_FanShop'
     */
    const VALUE_SPORTS_MEMORABILIA_CARDS_FAN_SHOP = 'SportsMemorabilia_Cards_FanShop';
    /**
     * Constant for value 'Stamps'
     * @return string 'Stamps'
     */
    const VALUE_STAMPS = 'Stamps';
    /**
     * Constant for value 'Tickets'
     * @return string 'Tickets'
     */
    const VALUE_TICKETS = 'Tickets';
    /**
     * Constant for value 'Travels'
     * @return string 'Travels'
     */
    const VALUE_TRAVELS = 'Travels';
    /**
     * Constant for value 'Gambling'
     * @return string 'Gambling'
     */
    const VALUE_GAMBLING = 'Gambling';
    /**
     * Constant for value 'Alcohol'
     * @return string 'Alcohol'
     */
    const VALUE_ALCOHOL = 'Alcohol';
    /**
     * Constant for value 'Tobacco'
     * @return string 'Tobacco'
     */
    const VALUE_TOBACCO = 'Tobacco';
    /**
     * Constant for value 'MoneyTransfer'
     * @return string 'MoneyTransfer'
     */
    const VALUE_MONEY_TRANSFER = 'MoneyTransfer';
    /**
     * Constant for value 'Software'
     * @return string 'Software'
     */
    const VALUE_SOFTWARE = 'Software';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_OTHER
     * @uses self::VALUE_AIRLINES
     * @uses self::VALUE_ANTIQUES
     * @uses self::VALUE_ART
     * @uses self::VALUE_CAMERAS_PHOTOS
     * @uses self::VALUE_CARS_BOATS_VEHICLES_PARTS
     * @uses self::VALUE_CELL_PHONES_TELECOM
     * @uses self::VALUE_COINS_PAPER_MONEY
     * @uses self::VALUE_COLLECTIBLES
     * @uses self::VALUE_COMPUTERS_NETWORKING
     * @uses self::VALUE_CONSUMER_ELECTRONICS
     * @uses self::VALUE_JEWELRY_WATCHES
     * @uses self::VALUE_MUSICAL_INSTRUMENTS
     * @uses self::VALUE_REAL_ESTATE
     * @uses self::VALUE_SPORTS_MEMORABILIA_CARDS_FAN_SHOP
     * @uses self::VALUE_STAMPS
     * @uses self::VALUE_TICKETS
     * @uses self::VALUE_TRAVELS
     * @uses self::VALUE_GAMBLING
     * @uses self::VALUE_ALCOHOL
     * @uses self::VALUE_TOBACCO
     * @uses self::VALUE_MONEY_TRANSFER
     * @uses self::VALUE_SOFTWARE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_OTHER,
            self::VALUE_AIRLINES,
            self::VALUE_ANTIQUES,
            self::VALUE_ART,
            self::VALUE_CAMERAS_PHOTOS,
            self::VALUE_CARS_BOATS_VEHICLES_PARTS,
            self::VALUE_CELL_PHONES_TELECOM,
            self::VALUE_COINS_PAPER_MONEY,
            self::VALUE_COLLECTIBLES,
            self::VALUE_COMPUTERS_NETWORKING,
            self::VALUE_CONSUMER_ELECTRONICS,
            self::VALUE_JEWELRY_WATCHES,
            self::VALUE_MUSICAL_INSTRUMENTS,
            self::VALUE_REAL_ESTATE,
            self::VALUE_SPORTS_MEMORABILIA_CARDS_FAN_SHOP,
            self::VALUE_STAMPS,
            self::VALUE_TICKETS,
            self::VALUE_TRAVELS,
            self::VALUE_GAMBLING,
            self::VALUE_ALCOHOL,
            self::VALUE_TOBACCO,
            self::VALUE_MONEY_TRANSFER,
            self::VALUE_SOFTWARE,
        );
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
