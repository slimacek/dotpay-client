<?php
namespace mirolabs\dotpay\client\payment\services;

use mirolabs\dotpay\client\payment\model\Notice;

class NotificationRequest
{

    /**
     * @return Notice
     */
    public function takeNotification()
    {
        $notice = new Notice();
        return $notice
            ->setId($this->getPostParam('id'))
            ->setChannel($this->getPostParam('channel'))
            ->setChannelCountry($this->getPostParam('channel_country'))
            ->setContactEmail($this->getPostParam('p_email'))
            ->setControl($this->getPostParam('control'))
            ->setDescription($this->getPostParam('description'))
            ->setEmail($this->getPostParam('email'))
            ->setInfo($this->getPostParam('p_info'))
            ->setOperationAmount($this->getPostParam('operation_amount'))
            ->setOperationCommissionAmount($this->getPostParam('operation_commission_amount'))
            ->setOperationCurrency($this->getPostParam('operation_currency'))
            ->setOperationDateTime($this->getOpertaionDateTime())
            ->setOperationNumber($this->getPostParam('operation_number'))
            ->setOperationOriginalAmount($this->getPostParam('operation_original_amount'))
            ->setOperationOriginalCurrency($this->getPostParam('operation_original_currency'))
            ->setOperationRelatedNumber($this->getPostParam('operation_related_number'))
            ->setOperationStatus($this->getPostParam('operation_status'))
            ->setOperationType($this->getPostParam('operation_type'))
            ->setOperationWithdrawalAmount($this->getPostParam('operation_withdrawal_amount'))
            ->setGeoIpCountry($this->getPostParam('geoip_country'))
            ->setSignature($this->getPostParam('signature'));

    }

    /**
     * @param Notice $notice
     * @param string $pin
     * @return boolean
     */
    public function verifySignature(Notice $notice, $pin)
    {
        $control = $pin;
        $control.= $notice->getId();
        $control.= $notice->getOperationNumber();
        $control.= $notice->getOperationType();
        $control.= $notice->getOperationStatus();
        $control.= $notice->getOperationAmount();
        $control.= $notice->getOperationCurrency();
        $control.= $notice->getOperationWithdrawalAmount();
        $control.= $notice->getOperationCommissionAmount();
        $control.= $notice->getOperationOriginalAmount();
        $control.= $notice->getOperationOriginalCurrency();
        $control.= $notice->getOperationDateTime()->format('Y-m-d H:i:s');
        $control.= $notice->getOperationRelatedNumber();
        $control.= $notice->getControl();
        $control.= $notice->getDescription();
        $control.= $notice->getEmail();
        $control.= $notice->getInfo();
        $control.= $notice->getContactEmail();
        $control.= $notice->getChannel();
        $control.= $notice->getChannelCountry();
        $control.= $notice->getGeoIpCountry();
        return $notice->getSignature() === hash('sha256', $control);
    }

    /**
     * @return \DateTime
     */
    private function getOpertaionDateTime()
    {
        return new \DateTime($this->getPostParam('operation_datetime'));
    }



    private function getPostParam($key)
    {
        if (isset($_POST[$key])) {
            return $_POST[$key];
        }
        return null;
    }
}