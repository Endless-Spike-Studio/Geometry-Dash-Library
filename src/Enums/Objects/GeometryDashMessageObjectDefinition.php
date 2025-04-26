<?php

namespace EndlessSpikeStudio\GeometryDashLibrary\Enums\Objects;

enum GeometryDashMessageObjectDefinition: int
{
	public const string SEGMENTATION = '#';
	public const string GLUE = ':';
	public const string SEPARATOR = '|';

	case ID = 1;
	case TARGET_ACCOUNT_ID = 2;
	case TARGET_PLAYER_ID = 3;
	case SUBJECT = 4;
	case BODY = 5;
	case TARGET_PLAYER_NAME = 6;
	case AGE = 7;
	case IS_READ = 8;
	case IS_SENDER = 9;
}