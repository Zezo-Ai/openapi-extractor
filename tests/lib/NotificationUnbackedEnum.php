<?php

declare(strict_types=1);

/**
 * SPDX-FileCopyrightText: 2026 Nextcloud GmbH and Nextcloud contributors
 * SPDX-License-Identifier: AGPL-3.0-or-later
 */

namespace OCA\Notifications;

/**
 * A pure enum, which is not backed by a scalar value and therefore can not be used as an OpenAPI type.
 * This file only exists to make sure the extractor does not choke on non-backed enums.
 */
enum NotificationUnbackedEnum {
	case A;
	case B;
}
