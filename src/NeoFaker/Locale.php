<?php

namespace NeoFaker;

use NeoFaker\Provider\Contract\Address;
use NeoFaker\Provider\Contract\Barcode;
use NeoFaker\Provider\Contract\Biased;
use NeoFaker\Provider\Contract\Colour;
use NeoFaker\Provider\Contract\Company;
use NeoFaker\Provider\Contract\DateTime;
use NeoFaker\Provider\Contract\File;
use NeoFaker\Provider\Contract\HtmlLorem;
use NeoFaker\Provider\Contract\Image;
use NeoFaker\Provider\Contract\Internet;
use NeoFaker\Provider\Contract\Lorem;
use NeoFaker\Provider\Contract\Miscellaneous;
use NeoFaker\Provider\Contract\Payment;
use NeoFaker\Provider\Contract\Person;
use NeoFaker\Provider\Contract\PhoneNumber;
use NeoFaker\Provider\Contract\Text;
use NeoFaker\Provider\Contract\UserAgent;
use NeoFaker\Provider\Contract\Uuid;

interface Locale
{
    public function getAddress(): Address;
    public function getBarcode(): Barcode;
    public function getBiased(): Biased;
    public function getColour(): Colour;
    public function getCompany(): Company;
    public function getDateTime(): DateTime;
    public function getFile(): File;
    public function getHtmlLorem(): HtmlLorem;
    public function getImage(): Image;
    public function getInternet(): Internet;
    public function getLorem(): Lorem;
    public function getMiscellaneous(): Miscellaneous;
    public function getPayment(): Payment;
    public function getPerson(): Person;
    public function getPhoneNumber(): PhoneNumber;
    public function getText(): Text;
    public function getUserAgent(): UserAgent;
    public function getUuid(): Uuid;
}
