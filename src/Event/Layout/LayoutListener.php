<?php
namespace QoboAdminPanel\Event\Layout;

use Cake\Event\Event;
use Cake\Event\EventListenerInterface;

class LayoutListener implements EventListenerInterface
{
    /**
     * Head element identifier
     */
    const ELEMENT_HEAD = 'QoboAdminPanel.head';

    /**
     * Header element identifier
     */
    const ELEMENT_HEADER = 'QoboAdminPanel.header';

    /**
     * Content element identifier
     */
    const ELEMENT_CONTENT = 'QoboAdminPanel.content';

    /**
     * Footer element identifier
     */
    const ELEMENT_FOOTER = 'QoboAdminPanel.footer';

    /**
     * {@inheritDoc}
     */
    public function implementedEvents()
    {
        return [
            'QoboAdminPanel.Layout.Head' => 'getHead',
            'QoboAdminPanel.Layout.Header' => 'getHeader',
            'QoboAdminPanel.Layout.Content' => 'getContent',
            'QoboAdminPanel.Layout.Footer' => 'getFooter'
        ];
    }

    /**
     * Method that adds head element to the Layout.
     *
     * @param  Cake\Event\Event $event Event object
     * @return void
     */
    public function getHead(Event $event)
    {
        if (!$event->subject()->elementExists(static::ELEMENT_HEAD)) {
            return;
        }

        $event->result = $event->subject()->element(static::ELEMENT_HEAD);
    }

    /**
     * Method that adds header element to the Layout.
     *
     * @param  Cake\Event\Event $event Event object
     * @return void
     */
    public function getHeader(Event $event)
    {
        if (!$event->subject()->elementExists(static::ELEMENT_HEADER)) {
            return;
        }

        $event->result = $event->subject()->element(static::ELEMENT_HEADER);
    }

    /**
     * Method that adds content element to the Layout.
     *
     * @param  Cake\Event\Event $event Event object
     * @return void
     */
    public function getContent(Event $event)
    {
        if (!$event->subject()->elementExists(static::ELEMENT_CONTENT)) {
            return;
        }

        $event->result = $event->subject()->element(static::ELEMENT_CONTENT);
    }

    /**
     * Method that adds footer element to the Layout.
     *
     * @param  Cake\Event\Event $event Event object
     * @return void
     */
    public function getFooter(Event $event)
    {
        if (!$event->subject()->elementExists(static::ELEMENT_FOOTER)) {
            return;
        }

        $event->result = $event->subject()->element(static::ELEMENT_FOOTER);
    }
}
