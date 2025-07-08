<?php

namespace EndlessSpikeStudio\GeometryDashLibrary\Services;

class GeometryDashObjectService
{
	public function merge(array $object, string $glue): string
	{
		$objects = [];
		foreach ($object as $key => $value) {
			$objects[] = implode($glue, [$key, $value]);
		}

		return implode($glue, $objects);
	}

	public function split(string $object, string $delimiter): array
	{
		$result = [];

		$objects = explode($delimiter, $object);
		for ($i = 0, $iMax = count($objects); $i < $iMax; $i += 2) {
			if (!isset($objects[$i]) || !isset($objects[$i + 1])) {
				continue;
			}

			$key = $objects[$i];
			$result[$key] = $objects[$i + 1];
		}

		return $result;
	}
}