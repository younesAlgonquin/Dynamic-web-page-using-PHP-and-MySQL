<?php


class EventItem
{
    
        private $eventName;
        private $eventDate;
        private $eventDesc;
        private $eventPrice;
        
        
        function __construct($eventName, $eventDate, $eventDesc, $eventPrice){
            
            $this->eventName = $eventName;
            $this->eventDate = $eventDate;
            $this->eventDesc = $eventDesc;
            $this->eventPrice = $eventPrice;
            
        }
        
        public function getEventName()
        {
            return $this->eventName;
        }
        
        
        public function getEventDate()
        {
            return $this->eventDate;
        }
        
        
        public function getEventDesc()
        {
            return $this->eventDesc;
        }
        
        
        public function getEventPrice()
        {
            return $this->eventPrice;
        }
        
        
        public function setEventName($eventName)
        {
            $this->eventName = $eventName;
        }
        
        
        public function setEventDate($eventDate)
        {
            $this->eventDate = $eventDate;
        }
        
        
        public function setEventDesc($eventDesc)
        {
            $this->eventDesc = $eventDesc;
        }
        
        
        public function setEventPrice($eventPrice)
        {
            $this->eventPrice = $eventPrice;
        }
        
}
                    
?>