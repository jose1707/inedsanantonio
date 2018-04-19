<?php

namespace PhpOffice\PhpWord\Writer\Word2007\Part;

/**
 * Word2007 web settings part writer: word/webSettings.xml
 */
class WebSettings extends Settings
{
    /**
     * Write part
     *
     * @return string
     */
    public function write()
    {
        $settings = array(
            'w:optimizeForBrowser' => '',
        );

        $xmlWriter = $this->getXmlWriter();

        $xmlWriter->startDocument('1.0', 'UTF-8', 'yes');
        $xmlWriter->startElement('w:webSettings');
        $xmlWriter->writeAttribute('xmlns:r', 'http://schemas.openxmlformats.org/officeDocument/2006/relationships');
        $xmlWriter->writeAttribute('xmlns:w', 'http://schemas.openxmlformats.org/wordprocessingml/2006/main');

        foreach ($settings as $settingKey => $settingValue) {
            $this->writeSetting($xmlWriter, $settingKey, $settingValue);
        }

        $xmlWriter->endElement(); // w:settings

        return $xmlWriter->getData();
    }
}
