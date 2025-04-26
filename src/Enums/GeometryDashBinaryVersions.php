<?php

namespace EndlessSpikeStudio\GeometryDashLibrary\Enums;

enum GeometryDashBinaryVersions: int
{
	case __35 = 35;
	case __42 = 42;
	case __45 = 45;

	public const GeometryDashBinaryVersions LATEST = GeometryDashBinaryVersions::__45;
}