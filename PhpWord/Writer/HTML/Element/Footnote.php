<?php

namespace PhpOffice\PhpWord\Writer\HTML\Element;

/**
 * Footnote element HTML writer
 *
 * @since 0.10.0
 */
class Footnote extends AbstractElement
{
    /**
     * Note type footnote|endnote
     *
     * @var string
     */
    protected $noteType = 'footnote';

    /**
     * Write footnote/endnote marks; The actual content is written in parent writer (HTML)
     *
     * @return string
     */
    public function write()
    {
        if (!$this->element instanceof \PhpOffice\PhpWord\Element\Footnote) {
            return '';
        }
        /** @var \PhpOffice\PhpWord\Writer\HTML $parentWriter Type hint */
        $parentWriter = $this->parentWriter;

        $noteId = count($parentWriter->getNotes()) + 1;
        $noteMark = $this->noteType . '-' . $this->element->getRelationId();
        $content = "<a name=\"{$noteMark}\"><a href=\"#note-{$noteId}\" class=\"NoteRef\"><sup>{$noteId}</sup></a>";

        $parentWriter->addNote($noteId, $noteMark);

        return $content;
    }
}
