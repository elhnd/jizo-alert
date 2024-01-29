<?php

namespace Sesame\Bundle\JizoAlerts\Entity;
use Doctrine\ORM\Mapping as ORM;

use JsonSerializable;

#[ORM\Entity(repositoryClass:"Sesame\Bundle\JizoAlerts\Repository\AlertRepository")]
#[ORM\Table(name:"AlertPusherBody")]
class Alert implements JsonSerializable 
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type:"integer", name: "Idx")]
    private $idx;

    #[ORM\Column(type:"string", name: "RuleSidRev")]
    private $sidRev;

    #[ORM\Column(type:"string", name: "Content")]
    private $content;

    #[ORM\Column(type:"string", name: "Sid")]
    private $sid;

    #[ORM\Column(type:"string", name: "Rev")]
    private $rev;

    #[ORM\Column(type:"string", name: "Signature")]
    private $signature;

    #[ORM\Column(type:"string", name: "Category")]
    private $category;

    #[ORM\Column(type:"integer", name: "Severity")]
    private $severity;

    #[ORM\Column(type:"integer", name: "FlowId")]
    private $flowId;

    #[ORM\Column(type:"integer", name: "SrcIp")]
    private $srcIp;

    #[ORM\Column(type:"string", name: "SrcPort")]
    private $srcPort;

    #[ORM\Column(type:"string", name: "DestIp")]
    private $destIp;

    #[ORM\Column(type:"integer", name: "DestPort")]
    private $destPort;

    #[ORM\Column(type:"string", name: "Proto")]
    private $proto;

    #[ORM\Column(type:"string", name: "AppProto")]
    private $appProto;

    #[ORM\Column(type:"string", name: "Payload")]
    private $payload;

    #[ORM\Column(type:"string", name: "PayloadPrintable")]
    private $payloadPrintable;

    #[ORM\Column(type:"string", name: "Packet")]
    private $packet;

    #[ORM\Column(type:"string", name: "FlowBits")]
    private $flowbits;

    #[ORM\Column(type:"string", name: "DateTime")]
    private $dateTime;

    private $occurence;

    #[ORM\Column(type:"integer", name: "State")]
    private $state;

    #[ORM\Column(type:"string", name: "Comment")]
    private $comment;

    #[ORM\Column(type:"integer", name: "AlertCategory")]
    private $alertCategory;

    #[ORM\Column(type:"integer", name: "InvestigationConclusion")]
    private $investigationConclusion;

    #[ORM\Column(type:"integer", name: "Behaviour")]
    private $behaviour;

    #[ORM\Column(type:"integer", name: "VlanId")]
    private $vlanId;

    private $metadata;

    public static function create() : Alert {
        return new Alert();
    }

    /**
     * @return mixed
     */
    public function getIdx()
    {
        return $this->idx;
    }

    /**
     * @param mixed $idx
     * @return Alert
     */
    public function setIdx($idx)
    {
        $this->idx = $idx;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSidRev()
    {
        return $this->sidRev;
    }

    /**
     * @param mixed $sidRev
     * @return Alert
     */
    public function setSidRev($sidRev)
    {
        $this->sidRev = $sidRev;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     * @return Alert
     */
    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSid()
    {
        return $this->sid;
    }

    /**
     * @param mixed $sid
     * @return Alert
     */
    public function setSid($sid)
    {
        $this->sid = $sid;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRev()
    {
        return $this->rev;
    }

    /**
     * @param mixed $rev
     * @return Alert
     */
    public function setRev($rev)
    {
        $this->rev = $rev;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * @param mixed $signature
     * @return Alert
     */
    public function setSignature($signature)
    {
        $this->signature = $signature;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $category
     * @return Alert
     */
    public function setCategory($category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSeverity()
    {
        return $this->severity;
    }

    /**
     * @param mixed $severity
     * @return Alert
     */
    public function setSeverity($severity)
    {
        $this->severity = $severity;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFlowId()
    {
        return $this->flowId;
    }

    /**
     * @param mixed $flowId
     * @return Alert
     */
    public function setFlowId($flowId)
    {
        $this->flowId = $flowId;
        return $this;
    }

    /**
    * @return mixed
    */
   public function getSrcIp()
   {
       return $this->srcIp;
   }

   /**
    * @param mixed $srcIp
    * @return Alert
    */
   public function setSrcIp($srcIp)
   {
       $this->srcIp = $srcIp;
       return $this;
   }

   /**
    * @return mixed
    */
    public function getSrcPort()
    {
        return $this->srcPort;
    }
 
    /**
     * @param mixed $srcPort
     * @return Alert
     */
    public function setSrcPort($srcPort)
    {
        $this->srcPort = $srcPort;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDestIp()
    {
        return $this->destIp;
    }

    /**
     * @param mixed $destIp
     * @return Alert
     */
    public function setDestIp($destIp)
    {
        $this->destIp = $destIp;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDestPort()
    {
        return $this->destPort;
    }

    /**
     * @param mixed $destPort
     * @return Alert
     */
    public function setDestPort($destPort)
    {
        $this->destPort = $destPort;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getproto()
    {
        return $this->proto;
    }

    /**
     * @param mixed $proto
     * @return Alert
     */
    public function setproto($proto)
    {
        $this->proto = $proto;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAppProto()
    {
        return $this->appProto;
    }

    /**
     * @param mixed $appProto
     * @return Alert
     */
    public function setAppProto($appProto)
    {
        $this->appProto = $appProto;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * @param mixed $payload
     * @return Alert
     */
    public function setPayload($payload)
    {
        $this->payload = $payload;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPayloadPrintable()
    {
        return $this->payloadPrintable;
    }

    /**
     * @param mixed $protoPrintable
     * @return Alert
     */
    public function setPayloadPrintable($payloadPrintable)
    {
        $this->payloadPrintable = $payloadPrintable;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPacket()
    {
        return $this->packet;
    }

    /**
     * @param mixed $packet
     * @return Alert
     */
    public function setPacket($packet)
    {
        $this->packet = $packet;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFlowbits()
    {
        return $this->flowbits;
    }

    /**
     * @param mixed $flowbits
     * @return Alert
     */
    public function setFlowbits($flowbits)
    {
        $this->flowbits = $flowbits;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDatetime()
    {
        return $this->dateTime;
    }

    /**
     * @param mixed $datetime
     * @return Alert
     */
    public function setDatetime($datetime)
    {
        $this->dateTime = $datetime;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOccurence()
    {
        return $this->occurence;
    }

    /**
     * @param mixed $occurence
     * @return Alert
     */
    public function setOccurence($occurence)
    {
        $this->occurence = $occurence;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $state
     * @return Alert
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param mixed $comment
     * @return Alert
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAlertCategory()
    {
        return $this->alertCategory;
    }

    /**
     * @param mixed $alertCategory
     * @return Alert
     */
    public function setAlertCategory($alertCategory)
    {
        $this->alertCategory = $alertCategory;
        return $this;
    }

     /**
     * @return mixed
     */
    public function getInvestigationConclusion()
    {
        return $this->investigationConclusion;
    }

    /**
     * @param mixed $investigationConclusion
     * @return Alert
     */
    public function setInvestigationConclusion($investigationConclusion)
    {
        $this->investigationConclusion = $investigationConclusion;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBehaviour()
    {
        return $this->behaviour;
    }

    /**
     * @param mixed $behaviour
     * @return Alert
     */
    public function setBehaviour($behaviour)
    {
        $this->behaviour = $behaviour;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getVlanId()
    {
        return $this->vlanId;
    }

    /**
     * @param mixed $vlanId
     * @return Alert
     */
    public function setVlanId($vlanId)
    {
        $this->vlanId = $vlanId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * @param mixed $metadata
     * @return Alert
     */
    public function setMetadata($metadata)
    {
        $this->metadata = $metadata;
        return $this;
    }

    public function jsonSerialize(): mixed
    {
        $toJson = [
            'idx' => $this->idx,
            'sidrev' => $this->sidRev,
            'content' => $this->content,
            'sid' => $this->sid,
            'rev' => $this->rev,
            'signature' => $this->signature,
            'category' => $this->category,
            'severity' => $this->severity,
            'flowId' => $this->flowId,
            'srcIp' => $this->srcIp,
            'srcPort' => $this->srcPort,
            'destIp' => $this->destIp,
            'destPort' => $this->destPort,
            'proto' => $this->proto,
            'appProto' => $this->appProto,
            'payload' => $this->payload,
            'payloadPrintable' => $this->payloadPrintable,
            'packet' => $this->packet,
            'flowbits' => $this->flowbits,
            'dateTime' => $this->dateTime,
            'occurence' => $this->occurence,
            'state' => $this->state,
            'comment' => $this->comment,
            'alertCategory' => $this->alertCategory,
            'investigationConclusion' => $this->investigationConclusion,
            'behaviour' => $this->behaviour,
            'vlanId' => $this->vlanId,
            'metadata' => $this->metadata,
        ];

        return $toJson;
    }
}