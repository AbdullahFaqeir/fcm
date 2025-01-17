<?php

namespace NotificationChannels\Fcm\Resources;

use NotificationChannels\Fcm\Enums\AndroidMessagePriority;

class AndroidConfig implements FcmResource
{
    /**
     * @var string|null
     */
    protected ?string $collapseKey;

    /**
     * @var AndroidMessagePriority|null
     */
    protected ?AndroidMessagePriority $priority;

    /**
     * @var string|null
     */
    protected ?string $ttl;

    /**
     * @var string|null
     */
    protected ?string $restrictedPackageName;

    /**
     * @var array|null
     */
    protected ?array $data;

    /**
     * @var AndroidNotification|null
     */
    protected ?AndroidNotification $notification;

    /**
     * @var AndroidFcmOptions|null
     */
    protected ?AndroidFcmOptions $fcmOptions;

    /**
     * @return static
     */
    public static function create(): self
    {
        return new self;
    }

    /**
     * @return string|null
     */
    public function getCollapseKey(): ?string
    {
        return $this->collapseKey;
    }

    /**
     * @param  string|null  $collapseKey
     * @return AndroidConfig
     */
    public function setCollapseKey(?string $collapseKey): self
    {
        $this->collapseKey = $collapseKey;

        return $this;
    }

    /**
     * @return AndroidMessagePriority|null
     */
    public function getPriority(): ?AndroidMessagePriority
    {
        return $this->priority;
    }

    /**
     * @param  AndroidMessagePriority|null  $priority
     * @return AndroidConfig
     */
    public function setPriority(?AndroidMessagePriority $priority): self
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTtl(): ?string
    {
        return $this->ttl;
    }

    /**
     * @param  string|null  $ttl
     * @return AndroidConfig
     */
    public function setTtl(?string $ttl): self
    {
        $this->ttl = $ttl;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getRestrictedPackageName(): ?string
    {
        return $this->restrictedPackageName;
    }

    /**
     * @param  string|null  $restrictedPackageName
     * @return AndroidConfig
     */
    public function setRestrictedPackageName(?string $restrictedPackageName): self
    {
        $this->restrictedPackageName = $restrictedPackageName;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getData(): ?array
    {
        return $this->data;
    }

    /**
     * @param  array|null  $data
     * @return AndroidConfig
     */
    public function setData(?array $data): self
    {
        $this->data = $data;

        return $this;
    }

    /**
     * @return AndroidNotification|null
     */
    public function getNotification(): ?AndroidNotification
    {
        return $this->notification;
    }

    /**
     * @param  AndroidNotification|null  $notification
     * @return AndroidConfig
     */
    public function setNotification(?AndroidNotification $notification): self
    {
        $this->notification = $notification;

        return $this;
    }

    /**
     * @return AndroidFcmOptions|null
     */
    public function getFcmOptions(): ?AndroidFcmOptions
    {
        return $this->fcmOptions;
    }

    /**
     * @param  AndroidFcmOptions|null  $fcmOptions
     * @return AndroidConfig
     */
    public function setFcmOptions(?AndroidFcmOptions $fcmOptions): self
    {
        $this->fcmOptions = $fcmOptions;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function toArray(): array
    {
        return [
            'collapse_key' => $this->getCollapseKey(),
            'priority' =>$this->getPriority()?->name,
            'ttl' => $this->getTtl(),
            'restricted_package_name' => $this->getRestrictedPackageName(),
            'data' => $this->getData(),
            'notification' => $this->getNotification()?->toArray(),
            'fcm_options' => $this->getFcmOptions()?->toArray(),
        ];
    }
}
